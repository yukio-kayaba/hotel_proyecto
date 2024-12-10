document.addEventListener('DOMContentLoaded', () => {
    // Estado inicial
    const state = {
        currentStep: 1,
        totalSteps: 3, // Changed from 4 to 3
        prices: {
            standard: 200,
            deluxe: 350,
            suite: 500
        }
    };
 
    // Elementos DOM principales
    const form = document.getElementById('bookingForm');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    
    // Controladores principales
    const formController = {
        updateStep(direction) {
            if (!this.validateStep() && direction === 'next') return;
 
            const newStep = direction === 'next' 
                ? state.currentStep + 1 
                : state.currentStep - 1;
 
            if (newStep < 1 || newStep > state.totalSteps) return;
 
            // Actualizar estado visual
            this.updateStepVisibility(state.currentStep, newStep);
            state.currentStep = newStep;
            
            // Actualizaciones adicionales
            this.updateButtons();
            if(state.currentStep === 2) this.updateSummary();
        },
 
        updateStepVisibility(oldStep, newStep) {
            // Actualizar pasos del formulario
            document.querySelector(`.form-step[data-step="${oldStep}"]`)
                .classList.remove('active');
            document.querySelector(`.form-step[data-step="${newStep}"]`)
                .classList.add('active');
 
            // Actualizar indicadores de progreso
            document.querySelector(`.progress-step[data-step="${oldStep}"]`)
                .classList.remove('active');
            document.querySelector(`.progress-step[data-step="${newStep}"]`)
                .classList.add('active');
        },
 
        validateStep() {
            const currentFields = document.querySelectorAll(
                `.form-step[data-step="${state.currentStep}"] input[required],
                 .form-step[data-step="${state.currentStep}"] select[required]`
            );
 
            let isValid = true;
            currentFields.forEach(field => {
                field.classList.remove('error');
                
                if (!field.value) {
                    field.classList.add('error');
                    isValid = false;
                }
 
                // Validaciones específicas
                const validators = {
                    card: value => /^\d{16}$/.test(value),
                    cvv: value => /^\d{3}$/.test(value)
                };
 
                if (validators[field.name]) {
                    if (!validators[field.name](field.value)) {
                        field.classList.add('error');
                        isValid = false;
                    }
                }
            });
 
            return isValid;
        },
 
        updateButtons() {
            prevBtn.style.display = state.currentStep === 1 ? 'none' : 'block';
            nextBtn.textContent = state.currentStep === state.totalSteps 
                ? 'Confirmar Reserva' 
                : 'Siguiente';
        },
 
        updateSummary() {
            const getData = name => form.querySelector(`[name="${name}"]`).value;
            const checkin = getData('checkin');
            const checkout = getData('checkout');
            const guests = getData('guests');
            const roomType = getData('room-type');
 
            const days = this.calculateDays(checkin, checkout);
            const basePrice = state.prices[roomType];
            const subtotal = basePrice * days;
            const taxes = subtotal * 0.18;
            const total = subtotal + taxes;
 
            document.querySelector('.booking-summary').innerHTML = this.generateSummaryHTML({
                checkin, checkout, guests, roomType, days, basePrice, subtotal, taxes, total
            });
        },
 
        generateSummaryHTML(data) {
            const formatDate = date => new Date(date).toLocaleDateString('es-ES', {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });
 
            return `
                <p><span>Fecha de entrada:</span><span>${formatDate(data.checkin)}</span></p>
                <p><span>Fecha de salida:</span><span>${formatDate(data.checkout)}</span></p>
                <p><span>Duración:</span><span>${data.days} noche${data.days !== 1 ? 's' : ''}</span></p>
                <p><span>Huéspedes:</span><span>${data.guests} adulto${data.guests !== 1 ? 's' : ''}</span></p>
                <p><span>Habitación:</span><span>${data.roomType}</span></p>
                <p><span>Precio por noche:</span><span>$${data.basePrice.toFixed(2)}</span></p>
                <p><span>Subtotal:</span><span>$${data.subtotal.toFixed(2)}</span></p>
                <p><span>Impuestos (18%):</span><span>$${data.taxes.toFixed(2)}</span></p>
                <p><span>Total:</span><span>$${data.total.toFixed(2)}</span></p>
            `;
        },
 
        calculateDays(start, end) {
            const diffTime = Math.abs(new Date(end) - new Date(start));
            return Math.ceil(diffTime / (1000 * 60 * 60 * 24));
        },
 
        handleSubmit() {
            const formData = {};
            form.querySelectorAll('input, select').forEach(field => {
                formData[field.name] = field.value;
            });
        
            console.log('Datos de reserva:', formData);
            alert('¡Reserva completada con éxito!');
            
            form.reset();
            
            // Actualizar visibilidad al paso 1
            document.querySelectorAll('.form-step, .progress-step').forEach(el => {
                el.classList.remove('active');
            });
            document.querySelector('.form-step[data-step="1"]').classList.add('active');
            document.querySelector('.progress-step[data-step="1"]').classList.add('active');
            
            state.currentStep = 1;
            this.updateButtons();
        }
    };
 
    // Event Listeners
    prevBtn.addEventListener('click', () => formController.updateStep('prev'));
    nextBtn.addEventListener('click', () => {
        if (state.currentStep === state.totalSteps && formController.validateStep()) {
            formController.handleSubmit();
        } else {
            formController.updateStep('next');
        }
    });
 
    // Listeners para actualización en tiempo real del resumen
    form.querySelectorAll('input, select').forEach(field => {
        field.addEventListener('change', () => {
            if (state.currentStep === 2) formController.updateSummary();
        });
    });
 
    // Inicialización
    formController.updateButtons();
});
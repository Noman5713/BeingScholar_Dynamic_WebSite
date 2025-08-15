<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enroll - {{ $course['title'] }} - DIU BeingScholar</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/enroll.css') }}">
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="container nav-container">
            <div class="logo">BeingScholar</div>
            <ul class="nav-links">
                <li><a href="/">Home</a></li>
                <li><a href="/#about">About</a></li>
                <li><a href="/courses">Courses</a></li>
                <li><a href="/#teachers">Teachers</a></li>
                <li><a href="/#services">Services</a></li>
                <li><a href="/#success">Success & Reviews</a></li>
                <li><a href="/#join">Join Us</a></li>
                <li><a href="/#contact">Contact</a></li>
            </ul>
            <div class="login-btn"><a href="#login">Login/Register</a></div>
            <div class="menu-toggle" id="mobile-menu">
                <span></span><span></span><span></span>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1 class="page-title">Course Enrollment</h1>
            <p class="page-subtitle">Complete your payment to secure your spot in {{ $course['title'] }}</p>
        </div>
    </section>

    <!-- Enrollment Section -->
    <section class="enrollment-section">
        <div class="container">
            <div class="enrollment-container">
                <!-- Payment Section -->
                <div class="payment-section">
                    <div class="payment-methods-card">
                        <h2 class="payment-title">🏦 Payment Methods</h2>
                        <p class="payment-subtitle">Choose your preferred payment method and complete the transaction</p>
                        
                        <div class="payment-options">
                            <!-- Mobile Banking Option -->
                            <div class="payment-option">
                                <input type="radio" id="mobile-banking" name="payment_method" value="mobile_banking" checked>
                                <label for="mobile-banking" class="payment-option-label">
                                    <div class="payment-logos">
                                        <img src="{{ asset('images/payment/bkash.png') }}" alt="bKash" class="payment-logo bkash-logo">
                                        <img src="{{ asset('images/payment/nagad.png') }}" alt="Nagad" class="payment-logo nagad-logo">
                                    </div>
                                    <span class="payment-label">Mobile Banking</span>
                                </label>
                            </div>

                            <!-- Bank Option -->
                            <div class="payment-option">
                                <input type="radio" id="bank" name="payment_method" value="bank">
                                <label for="bank" class="payment-option-label">
                                    <img src="{{ asset('images/payment/dbbl.png') }}" alt="Dutch Bangla Bank" class="payment-logo bank-logo">
                                    <span class="payment-label">Bank Transfer</span>
                                </label>
                            </div>
                        </div>

                        <!-- Payment Details Form -->
                        <form class="payment-form" id="paymentForm">
                            @csrf
                            <input type="hidden" name="course_name" value="{{ $course['title'] }}">
                            <input type="hidden" name="amount" value="{{ $course['new_price'] }}">
                            
                            <!-- Mobile Banking Details -->
                            <div class="payment-details" id="mobile-banking-details">
                                <h3 class="payment-method-title">📱 Mobile Banking Payment</h3>
                                <div class="payment-info">
                                    <div class="info-card">
                                        <h4>💰 Send Money To:</h4>
                                        <p class="account-number">01705644008</p>
                                        <p class="payment-amount"><strong>Amount: ৳{{ $course['new_price'] }}</strong></p>
                                    </div>
                                </div>
                                
                                <div class="payment-instructions">
                                    <h4>📋 Step-by-Step Instructions:</h4>
                                    <ol>
                                        <li>Open your <strong>bKash/Nagad/Rocket</strong> app</li>
                                        <li>Select <strong>"Send Money"</strong> option</li>
                                        <li>Enter number: <strong>01705644008</strong></li>
                                        <li>Enter amount: <strong>৳{{ $course['new_price'] }}</strong></li>
                                        <li>Complete the transaction with your PIN</li>
                                        <li>Copy the <strong>Transaction ID</strong> from confirmation message</li>
                                        <li>Enter the Transaction ID in the field below</li>
                                    </ol>
                                </div>
                                
                                <div class="form-group">
                                    <label for="transaction-id">📝 Transaction ID *</label>
                                    <input type="text" id="transaction-id" name="transaction_id" placeholder="e.g., 9A1B2C3D4E" required>
                                    <small class="field-help">📌 Enter the exact Transaction ID you received after making the payment</small>
                                </div>
                            </div>

                            <!-- Bank Transfer Details -->
                            <div class="payment-details" id="bank-details" style="display: none;">
                                <h3 class="payment-method-title">🏦 Bank Transfer Payment</h3>
                                <div class="payment-info">
                                    <div class="info-card">
                                        <h4>🏛️ Bank Details:</h4>
                                        <p><strong>Bank:</strong> Dutch Bangla Bank Limited</p>
                                        <p><strong>Account Name:</strong> DIU BeingScholar</p>
                                        <p><strong>Account Number:</strong> 123-456-789012</p>
                                        <p><strong>Branch:</strong> Dhanmondi Branch</p>
                                        <p class="payment-amount"><strong>Amount: ৳{{ $course['new_price'] }}</strong></p>
                                    </div>
                                </div>
                                
                                <div class="payment-instructions">
                                    <h4>📋 Step-by-Step Instructions:</h4>
                                    <ol>
                                        <li>Visit any <strong>DBBL branch</strong> or use online banking</li>
                                        <li>Transfer to account: <strong>123-456-789012</strong></li>
                                        <li>Amount: <strong>৳{{ $course['new_price'] }}</strong></li>
                                        <li>Reference: <strong>{{ $course['title'] }}</strong></li>
                                        <li>Keep the <strong>transaction receipt</strong></li>
                                        <li>Enter the Transaction ID from receipt below</li>
                                    </ol>
                                </div>
                                
                                <div class="form-group">
                                    <label for="bank-transaction-id">📝 Transaction ID *</label>
                                    <input type="text" id="bank-transaction-id" name="bank_transaction_id" placeholder="e.g., TXN123456789" required>
                                    <small class="field-help">📌 Enter the Transaction ID from your bank receipt</small>
                                </div>
                            </div>

                            <!-- Contact Information -->
                            <div class="contact-info-section">
                                <h4>📞 Contact Information (Optional but Recommended)</h4>
                                <p class="section-description">Help us reach you faster for enrollment confirmation and course updates.</p>
                                
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="student-name">👤 Full Name</label>
                                        <input type="text" id="student-name" name="student_name" placeholder="Enter your full name">
                                    </div>
                                    <div class="form-group">
                                        <label for="student-phone">📱 Phone Number</label>
                                        <input type="tel" id="student-phone" name="student_phone" placeholder="01XXXXXXXXX">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="student-email">📧 Email Address</label>
                                    <input type="email" id="student-email" name="student_email" placeholder="your.email@example.com">
                                </div>
                            </div>

                            <!-- Message Display -->
                            <div id="payment-message" class="payment-message" style="display: none;"></div>
                            
                            <!-- Submit Button -->
                            <button type="submit" class="submit-btn" id="submitBtn">
                                <span class="btn-text">🚀 Submit Payment Information</span>
                                <span class="btn-loading" style="display: none;">
                                    <span class="spinner"></span> Processing...
                                </span>
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Course Summary Sidebar -->
                <div class="course-summary-sidebar">
                    <!-- Course Info Card -->
                    <div class="course-info-card">
                        <div class="course-header">
                            <div class="course-image-small">
                                <img src="{{ $course['image'] }}" alt="{{ $course['title'] }}">
                            </div>
                            <div class="course-basic-info">
                                <h3 class="course-title">{{ $course['title'] }}</h3>
                                <p class="course-batch">{{ $course['batch'] }} • {{ $course['class_type'] }}</p>
                                <p class="course-start">📅 Starts: <span>{{ $course['seats'] ? 'Soon' : 'Flexible' }}</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Details Card -->
                    <div class="payment-details-card">
                        <h3 class="payment-details-title">💰 Payment Summary</h3>
                        
                        <div class="payment-breakdown">
                            @if($course['old_price'])
                            <div class="payment-item original-price">
                                <span class="payment-label">Original Price:</span>
                                <span class="payment-value crossed">৳{{ $course['old_price'] }}</span>
                            </div>
                            @endif
                            
                            <div class="payment-item current-price">
                                <span class="payment-label">Course Price:</span>
                                <span class="payment-value">৳{{ $course['new_price'] }}</span>
                            </div>
                            
                            @if($course['old_price'])
                            <div class="payment-item discount">
                                <span class="payment-label">💸 You Save:</span>
                                <span class="payment-value savings">৳{{ $course['old_price'] - $course['new_price'] }}</span>
                            </div>
                            @endif

                            <div class="payment-item total">
                                <span class="payment-label">💳 Total Payment:</span>
                                <span class="payment-value total-amount">৳{{ $course['new_price'] }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Course Features -->
                    <div class="course-features-card">
                        <h4>🎯 What You'll Get:</h4>
                        <ul class="features-list">
                            <li>✅ {{ $course['duration'] }} of content</li>
                            <li>✅ {{ $course['class_type'] }}</li>
                            <li>✅ {{ $course['access'] ?? 'Lifetime' }} access</li>
                            <li>✅ Certificate of completion</li>
                            <li>✅ Expert instructor support</li>
                            <li>✅ Course materials & resources</li>
                        </ul>
                    </div>

                    <!-- Payment Process Info -->
                    <div class="payment-status-info">
                        <h4>📋 What happens next?</h4>
                        <ul class="process-steps">
                            <li>
                                <span class="step-number">1</span>
                                <span class="step-text">✅ Submit your transaction ID</span>
                            </li>
                            <li>
                                <span class="step-number">2</span>
                                <span class="step-text">🔍 We verify your payment (24-48 hours)</span>
                            </li>
                            <li>
                                <span class="step-number">3</span>
                                <span class="step-text">📧 You receive confirmation email</span>
                            </li>
                            <li>
                                <span class="step-number">4</span>
                                <span class="step-text">🎓 Full course access unlocked</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Support Contact -->
                    <div class="support-card">
                        <h4>💬 Need Help?</h4>
                        <p>Contact us for payment assistance:</p>
                        <div class="support-info">
                            <p>📱 WhatsApp: +8801705644008</p>
                            <p>📧 Email: support@beingscholar.com</p>
                            <p>⏰ Available: 9 AM - 9 PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Modal -->
    <div id="successModal" class="modal" style="display: none;">
        <div class="modal-content">
            <div class="modal-header">
                <div class="success-icon">
                    <svg width="60" height="60" viewBox="0 0 24 24" fill="none">
                        <circle cx="12" cy="12" r="10" fill="#28a745"/>
                        <path d="m9 12 2 2 4-4" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h2 class="modal-title">🎉 Payment Submitted Successfully!</h2>
            </div>
            <div class="modal-body">
                <div class="success-message-content">
                    <p class="main-message">Your payment information has been received and is being processed.</p>
                    <div class="transaction-details">
                        <div class="detail-item">
                            <span class="label">📋 Transaction ID:</span>
                            <span class="value" id="modal-trxn-id">-</span>
                        </div>
                        <div class="detail-item">
                            <span class="label">📚 Course:</span>
                            <span class="value" id="modal-course-name">{{ $course['title'] }}</span>
                        </div>
                        <div class="detail-item">
                            <span class="label">💰 Amount:</span>
                            <span class="value">৳{{ $course['new_price'] }}</span>
                        </div>
                        <div class="detail-item">
                            <span class="label">📅 Status:</span>
                            <span class="value status-pending">Pending Verification</span>
                        </div>
                    </div>
                    <div class="next-steps">
                        <h4>📋 What happens next?</h4>
                        <ul>
                            <li>✅ Your transaction is now in our system</li>
                            <li>🔍 We'll verify your payment within 24-48 hours</li>
                            <li>📧 You'll receive confirmation via email/SMS</li>
                            <li>🎓 Full course access will be unlocked after verification</li>
                        </ul>
                    </div>
                    <div class="support-info">
                        <p><strong>💬 Need help?</strong> Contact us at:</p>
                        <p>📱 WhatsApp: +8801705644008</p>
                        <p>📧 Email: support@beingscholar.com</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" onclick="closeSuccessModal(); window.location.href='/courses'">📋 View All Courses</button>
                <button class="btn btn-primary" onclick="goToCourseDetail()">📖 View Course Details</button>
            </div>
        </div>
    </div>

    <!-- Modal Overlay -->
    <div id="modalOverlay" class="modal-overlay" style="display: none;" onclick="closeSuccessModal()"></div>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu').addEventListener('click', function() {
            document.querySelector('.nav-links').classList.toggle('active');
        });

        // Payment method switching
        document.querySelectorAll('input[name="payment_method"]').forEach(radio => {
            radio.addEventListener('change', function() {
                // Hide all payment details
                document.getElementById('mobile-banking-details').style.display = 'none';
                document.getElementById('bank-details').style.display = 'none';
                
                // Show selected payment details
                if (this.value === 'mobile_banking') {
                    document.getElementById('mobile-banking-details').style.display = 'block';
                } else if (this.value === 'bank') {
                    document.getElementById('bank-details').style.display = 'block';
                }
            });
        });

        // Wait for DOM to be fully loaded
        document.addEventListener('DOMContentLoaded', function() {
            console.log('🚀 DOM Content Loaded event fired');
            
            // Enhanced form submission with backend integration
            const paymentForm = document.getElementById('paymentForm');
            if (!paymentForm) {
                console.error('❌ Payment form not found!');
                return;
            }
            console.log('✅ Payment form found:', paymentForm);
            
            // Add form submit listener
            paymentForm.addEventListener('submit', function(e) {
                e.preventDefault();
                console.log('🎯 Form submit event triggered!');
                handleFormSubmission();
            });
            console.log('✅ Form submit listener attached');
            
            // Also add direct click handler to submit button as backup
            const submitBtn = document.getElementById('submitBtn');
            if (submitBtn) {
                submitBtn.addEventListener('click', function(e) {
                    console.log('🖱️ Submit button clicked directly!');
                    e.preventDefault();
                    handleFormSubmission();
                });
                console.log('✅ Submit button click listener attached');
            } else {
                console.error('❌ Submit button not found for click listener!');
            }
        });

        function handleFormSubmission() {
            console.log('🔥 handleFormSubmission called!');
            alert('Form submission started! Check console for details.');
            
            // First, let's just test if we can show a simple alert
            try {
            
            const submitBtn = document.getElementById('submitBtn');
            const btnText = submitBtn.querySelector('.btn-text');
            const btnLoading = submitBtn.querySelector('.btn-loading');
            const messageDiv = document.getElementById('payment-message');
            const paymentForm = document.getElementById('paymentForm');
            
            // Check if payment method is selected
            const selectedPaymentElement = document.querySelector('input[name="payment_method"]:checked');
            if (!selectedPaymentElement) {
                console.error('❌ No payment method selected!');
                showMessage('error', '❌ Please select a payment method first');
                return;
            }
            
            const selectedPayment = selectedPaymentElement.value;
            console.log('✅ Selected payment method:', selectedPayment);
            
            // Get form data
            const formData = new FormData(paymentForm);
            
            // Get transaction ID based on selected payment method
            let transactionId = '';
            if (selectedPayment === 'mobile_banking') {
                transactionId = document.getElementById('transaction-id').value;
                console.log('📱 Mobile banking transaction ID:', transactionId);
            } else if (selectedPayment === 'bank') {
                transactionId = document.getElementById('bank-transaction-id').value;
                console.log('🏦 Bank transaction ID:', transactionId);
            }
            
            // Validation
            if (!transactionId || transactionId.trim() === '') {
                console.error('❌ Transaction ID is empty!');
                showMessage('error', '❌ Please enter a valid transaction ID');
                return;
            }

            if (transactionId.length < 6) {
                showMessage('error', '❌ Transaction ID seems too short. Please check and try again.');
                return;
            }
            
            // Set the final transaction ID and payment method
            formData.set('transaction_id', transactionId);
            formData.set('payment_method', selectedPayment === 'mobile_banking' ? 'bKash/Nagad/Rocket' : 'Bank Transfer');
            
            // Debug: Log all form data
            console.log('📋 Form data being sent:');
            for (let [key, value] of formData.entries()) {
                console.log(`  ${key}: ${value}`);
            }
            
            // Show loading state
            submitBtn.disabled = true;
            btnText.style.display = 'none';
            btnLoading.style.display = 'inline-flex';
            console.log('⏳ Loading state activated');
            
            // Get CSRF token
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            console.log('🔐 CSRF Token:', csrfToken ? 'Found' : 'Missing');
            
            // Submit to backend
            console.log('🚀 Sending request to /submit-transaction');
            fetch('/submit-transaction', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                }
            })
            .then(response => {
                console.log('📥 Response status:', response.status);
                return response.json();
            })
            .then(data => {
                console.log('📋 Response data:', data);
                if (data.success) {
                    console.log('✅ Success! Transaction ID:', data.transaction_id);
                    // Show success modal instead of simple message
                    showSuccessModal(data.transaction_id);
                    // Clear form
                    paymentForm.reset();
                } else {
                    console.error('❌ Error:', data.message);
                    showMessage('error', '❌ ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showMessage('error', '❌ Network error occurred. Please check your connection and try again.');
            })
            .finally(() => {
                // Reset button state
                submitBtn.disabled = false;
                btnText.style.display = 'inline';
                btnLoading.style.display = 'none';
            });
            
            } catch (error) {
                console.error('❌ Error in handleFormSubmission:', error);
                alert('Error occurred: ' + error.message);
            }
        }

        function showMessage(type, message) {
            const messageDiv = document.getElementById('payment-message');
            messageDiv.className = `payment-message ${type}-message`;
            messageDiv.innerHTML = message;
            messageDiv.style.display = 'block';
            
            // Scroll to message
            messageDiv.scrollIntoView({ behavior: 'smooth', block: 'center' });
            
            // Auto hide error messages after 8 seconds
            if (type === 'error') {
                setTimeout(() => {
                    messageDiv.style.display = 'none';
                }, 8000);
            }
        }

        // Auto-format phone number
        document.getElementById('student-phone').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length > 11) value = value.substring(0, 11);
            e.target.value = value;
        });

        // Success Modal Functions
        function showSuccessModal(transactionId) {
            // Update modal content with transaction details
            document.getElementById('modal-trxn-id').textContent = transactionId;
            
            // Show modal with animation
            const modal = document.getElementById('successModal');
            const overlay = document.getElementById('modalOverlay');
            
            overlay.style.display = 'block';
            modal.style.display = 'block';
            
            // Trigger animation
            setTimeout(() => {
                modal.classList.add('show');
                overlay.classList.add('show');
            }, 10);
            
            // Disable body scroll
            document.body.style.overflow = 'hidden';
            
            // Auto-close after 10 seconds (optional)
            setTimeout(() => {
                if (modal.style.display === 'block') {
                    closeSuccessModal();
                }
            }, 10000);
        }

        function closeSuccessModal() {
            const modal = document.getElementById('successModal');
            const overlay = document.getElementById('modalOverlay');
            
            modal.classList.remove('show');
            overlay.classList.remove('show');
            
            setTimeout(() => {
                modal.style.display = 'none';
                overlay.style.display = 'none';
                document.body.style.overflow = 'auto';
            }, 300);
        }

        function goToCourseDetail() {
            // Get current course ID from URL or course data
            const courseId = '{{ $course["id"] }}';
            window.location.href = '/course/' + courseId;
        }

        // Close modal on Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeSuccessModal();
            }
        });
    </script>

    <style>
        /* Enhanced styles for the payment form */
        .page-subtitle {
            text-align: center;
            color: #6c757d;
            margin-top: 0.5rem;
            font-size: 1.1rem;
        }

        .payment-subtitle {
            text-align: center;
            color: #6c757d;
            margin-bottom: 1.5rem;
            font-size: 0.95rem;
        }

        .payment-option-label {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
            cursor: pointer;
        }

        .payment-label {
            font-weight: 600;
            color: #495057;
            font-size: 0.9rem;
        }

        .payment-instructions {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-radius: 12px;
            padding: 1.5rem;
            margin: 1.5rem 0;
            border-left: 4px solid #007bff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        .payment-instructions h4 {
            margin: 0 0 1rem 0;
            color: #495057;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .payment-instructions ol {
            margin: 0;
            padding-left: 1.5rem;
        }

        .payment-instructions li {
            margin-bottom: 0.5rem;
            color: #495057;
            line-height: 1.5;
        }

        .info-card {
            background: white;
            border-radius: 8px;
            padding: 1rem;
            margin: 1rem 0;
            border: 2px solid #e9ecef;
            text-align: center;
        }

        .info-card h4 {
            margin: 0 0 0.5rem 0;
            color: #495057;
        }

        .account-number {
            font-size: 1.5rem;
            font-weight: bold;
            color: #007bff;
            margin: 0.5rem 0;
            letter-spacing: 1px;
        }

        .payment-amount {
            font-size: 1.2rem;
            color: #28a745;
            margin: 0.5rem 0;
        }

        .field-help {
            display: block;
            margin-top: 0.25rem;
            color: #6c757d;
            font-size: 0.875rem;
        }

        .contact-info-section {
            border-top: 2px solid #dee2e6;
            padding-top: 2rem;
            margin-top: 2rem;
        }

        .contact-info-section h4 {
            margin: 0 0 0.5rem 0;
            color: #495057;
        }

        .section-description {
            color: #6c757d;
            font-size: 0.9rem;
            margin-bottom: 1.5rem;
        }

        .form-row {
            display: flex;
            gap: 1rem;
        }

        .form-row .form-group {
            flex: 1;
        }

        .payment-message {
            padding: 1rem;
            border-radius: 8px;
            margin: 1.5rem 0;
            font-weight: 600;
            text-align: center;
            border: 2px solid;
            animation: slideDown 0.3s ease-out;
        }

        @keyframes slideDown {
            from { transform: translateY(-10px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .success-message {
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
        }

        .error-message {
            background-color: #f8d7da;
            border-color: #f5c6cb;
            color: #721c24;
        }

        .submit-btn {
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            transition: all 0.3s ease;
            padding: 1rem 2rem;
            font-size: 1.1rem;
            border: none;
            border-radius: 8px;
            color: white;
            font-weight: 600;
            cursor: pointer;
            width: 100%;
            z-index: 1;
        }

        .submit-btn:hover:not(:disabled) {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(40, 167, 69, 0.3);
        }

        .btn-loading {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .spinner {
            width: 16px;
            height: 16px;
            border: 2px solid transparent;
            border-top: 2px solid currentColor;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /* Sidebar enhancements */
        .course-info-card, .payment-details-card, .course-features-card, 
        .payment-status-info, .support-card {
            margin-bottom: 1.5rem;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .crossed {
            text-decoration: line-through;
            color: #6c757d;
        }

        .savings {
            color: #28a745;
        }

        .features-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .features-list li {
            padding: 0.5rem 0;
            border-bottom: 1px solid #f1f3f4;
        }

        .features-list li:last-child {
            border-bottom: none;
        }

        .process-steps {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .process-steps li {
            display: flex;
            align-items: center;
            padding: 0.75rem 0;
            border-bottom: 1px solid #f1f3f4;
        }

        .process-steps li:last-child {
            border-bottom: none;
        }

        .step-number {
            background: #007bff;
            color: white;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            font-weight: bold;
            margin-right: 1rem;
            flex-shrink: 0;
        }

        .support-info p {
            margin: 0.25rem 0;
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .form-row {
                flex-direction: column;
                gap: 0;
            }
            
            .payment-instructions ol {
                padding-left: 1.2rem;
            }
            
            .submit-btn {
                padding: 0.875rem 1.5rem;
                font-size: 1rem;
            }
        }

        /* Success Modal Styles */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: 9998;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .modal-overlay.show {
            opacity: 1;
        }

        .modal {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0.8);
            z-index: 9999;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .modal.show {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1);
        }

        .modal-content {
            background: white;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            max-width: 500px;
            width: 90vw;
            max-height: 90vh;
            overflow-y: auto;
            position: relative;
        }

        .modal-header {
            text-align: center;
            padding: 2rem 2rem 1rem 2rem;
            border-bottom: 1px solid #f1f3f4;
        }

        .success-icon {
            margin: 0 auto 1rem auto;
            animation: successPulse 1s ease-out;
        }

        @keyframes successPulse {
            0% { transform: scale(0); opacity: 0; }
            50% { transform: scale(1.1); opacity: 1; }
            100% { transform: scale(1); opacity: 1; }
        }

        .modal-title {
            margin: 0;
            color: #28a745;
            font-size: 1.5rem;
            font-weight: 600;
        }

        .modal-body {
            padding: 1.5rem 2rem;
        }

        .main-message {
            text-align: center;
            font-size: 1.1rem;
            color: #495057;
            margin-bottom: 1.5rem;
        }

        .transaction-details {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-radius: 12px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .detail-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 0.75rem;
            padding-bottom: 0.75rem;
            border-bottom: 1px solid #dee2e6;
        }

        .detail-item:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .detail-item .label {
            font-weight: 600;
            color: #495057;
        }

        .detail-item .value {
            font-weight: 500;
            color: #212529;
        }

        .status-pending {
            background: linear-gradient(135deg, #ffc107 0%, #fd7e14 100%);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.875rem;
            font-weight: 600;
        }

        .next-steps {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            border: 2px solid #e3f2fd;
        }

        .next-steps h4 {
            margin: 0 0 1rem 0;
            color: #1976d2;
            font-size: 1.1rem;
        }

        .next-steps ul {
            margin: 0;
            padding-left: 1.5rem;
            list-style: none;
        }

        .next-steps li {
            margin-bottom: 0.5rem;
            color: #495057;
            position: relative;
        }

        .next-steps li::before {
            content: '';
            position: absolute;
            left: -1.5rem;
            top: 0.5rem;
            width: 6px;
            height: 6px;
            background: #28a745;
            border-radius: 50%;
        }

        .support-info {
            background: linear-gradient(135deg, #e8f5e8 0%, #d4edda 100%);
            border-radius: 12px;
            padding: 1rem;
            text-align: center;
        }

        .support-info p {
            margin: 0.25rem 0;
            color: #155724;
            font-size: 0.9rem;
        }

        .support-info p:first-child {
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .modal-footer {
            padding: 1rem 2rem 2rem 2rem;
            display: flex;
            gap: 1rem;
            justify-content: center;
        }

        .btn {
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            border: none;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-primary {
            background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
            color: white;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #0056b3 0%, #004085 100%);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 123, 255, 0.3);
        }

        .btn-secondary {
            background: linear-gradient(135deg, #6c757d 0%, #495057 100%);
            color: white;
        }

        .btn-secondary:hover {
            background: linear-gradient(135deg, #495057 0%, #343a40 100%);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(108, 117, 125, 0.3);
        }

        /* Mobile responsive */
        @media (max-width: 768px) {
            .modal-content {
                margin: 1rem;
                max-width: calc(100vw - 2rem);
            }
            
            .modal-header,
            .modal-body,
            .modal-footer {
                padding: 1.5rem;
            }
            
            .modal-footer {
                flex-direction: column;
            }
            
            .btn {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</body>
</html>

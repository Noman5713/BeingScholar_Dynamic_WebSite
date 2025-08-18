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
                            <li>✅ {{ $course['access'] }} access</li>
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

    <script>
        // Mobile menu toggle
        const mobileMenu = document.getElementById('mobile-menu');
        const navLinks = document.querySelector('.nav-links');
        
        mobileMenu.addEventListener('click', function() {
            navLinks.classList.toggle('active');
            mobileMenu.classList.toggle('active');
        });
        
        // Close mobile menu when clicking on a link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', function() {
                navLinks.classList.remove('active');
                mobileMenu.classList.remove('active');
            });
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

        // Enhanced form submission with backend integration
        document.getElementById('paymentForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitBtn = document.getElementById('submitBtn');
            const btnText = submitBtn.querySelector('.btn-text');
            const btnLoading = submitBtn.querySelector('.btn-loading');
            const messageDiv = document.getElementById('payment-message');
            
            // Get form data
            const formData = new FormData(this);
            const selectedPayment = document.querySelector('input[name="payment_method"]:checked').value;
            
            // Get transaction ID based on selected payment method
            let transactionId = '';
            if (selectedPayment === 'mobile_banking') {
                transactionId = document.getElementById('transaction-id').value;
            } else if (selectedPayment === 'bank') {
                transactionId = document.getElementById('bank-transaction-id').value;
            }
            
            // Validation
            if (!transactionId || transactionId.trim() === '') {
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
            
            // Show loading state
            submitBtn.disabled = true;
            btnText.style.display = 'none';
            btnLoading.style.display = 'inline-flex';
            
            // Submit to backend
            fetch('/submit-transaction', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showMessage('success', data.message);
                    // Clear form and show success state
                    document.getElementById('paymentForm').reset();
                    // Optionally redirect after success
                    setTimeout(() => {
                        if (confirm('🎉 Payment submitted successfully! Would you like to view all courses?')) {
                            window.location.href = '/courses';
                        }
                    }, 3000);
                } else {
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
        });

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
    </style>
</body>
</html>

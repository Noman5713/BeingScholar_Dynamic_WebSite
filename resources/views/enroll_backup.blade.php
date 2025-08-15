<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enroll - {{ $course['title'] }} - DIU BeingScholar</title>
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
            <h1 class="page-title">Course Enroll</h1>
        </div>
    </section>

    <!-- Enrollment Section -->
    <section class="enrollment-section">
        <div class="container">
            <div class="enrollment-container">
                <!-- Payment Section -->
                <div class="payment-section">
                    <div class="payment-methods-card">
                        <h2 class="payment-title">Payment method</h2>
                        
                        <div class="payment-options">
                            <!-- bKash/Nagad Option -->
                            <div class="payment-option">
                                <input type="radio" id="mobile-banking" name="payment_method" value="mobile_banking" checked>
                                <label for="mobile-banking" class="payment-option-label">
                                    <div class="payment-logos">
                                        <img src="{{ asset('images/payment/bkash.png') }}" alt="bKash" class="payment-logo bkash-logo">
                                        <img src="{{ asset('images/payment/nagad.png') }}" alt="Nagad" class="payment-logo nagad-logo">
                                    </div>
                                </label>
                            </div>

                            <!-- Bank Option -->
                            <div class="payment-option">
                                <input type="radio" id="bank" name="payment_method" value="bank">
                                <label for="bank" class="payment-option-label">
                                    <img src="{{ asset('images/payment/dbbl.png') }}" alt="Dutch Bangla Bank" class="payment-logo bank-logo">
                                </label>
                            </div>
                        </div>

                        <!-- Payment Details Form -->
                        <form class="payment-form" id="paymentForm">
                            <div class="payment-details" id="mobile-banking-details">
                                <h3 class="payment-method-title">Pay via Send Money</h3>
                                <div class="payment-info">
                                    <p><strong>Bkash/Nagad/Rocket:</strong> 01705644008</p>
                                    <p><strong>Payment Amount:</strong> <span class="amount">৳ {{ $course['new_price'] }}</span></p>
                                </div>
                                
                                <div class="form-group">
                                    <label for="transaction-id">Enter Transaction ID</label>
                                    <input type="text" id="transaction-id" name="transaction_id" placeholder="Transaction ID" required>
                                </div>
                            </div>

                            <div class="payment-details" id="bank-details" style="display: none;">
                                <h3 class="payment-method-title">Bank Transfer</h3>
                                <div class="payment-info">
                                    <p><strong>Bank:</strong> Dutch Bangla Bank</p>
                                    <p><strong>Account Name:</strong> DIU BeingScholar</p>
                                    <p><strong>Account Number:</strong> 123-456-789012</p>
                                    <p><strong>Payment Amount:</strong> <span class="amount">৳ {{ $course['new_price'] }}</span></p>
                                </div>
                                
                                <div class="form-group">
                                    <label for="bank-transaction-id">Enter Transaction ID</label>
                                    <input type="text" id="bank-transaction-id" name="bank_transaction_id" placeholder="Transaction ID">
                                </div>
                            </div>

                            <button type="submit" class="submit-btn">Submit</button>
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
                                <p class="course-start">Course will start: <span>{{ $course['seats'] ? 'Soon' : 'N/A' }}</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Details Card -->
                    <div class="payment-details-card">
                        <h3 class="payment-details-title">Payment Details</h3>
                        
                        <div class="payment-breakdown">
                            <div class="payment-item">
                                <span class="payment-label">Course price:</span>
                                <span class="payment-value">৳ {{ $course['new_price'] }}</span>
                            </div>
                            
                            <div class="payment-item">
                                <span class="payment-label">Discounted amount:</span>
                                <span class="payment-value">৳ {{ $course['old_price'] ? ($course['old_price'] - $course['new_price']) : '0' }}</span>
                            </div>

                            <div class="promo-code-section">
                                <button class="promo-code-btn" id="promoCodeBtn">Have you a promo code?</button>
                                <div class="promo-code-input" id="promoCodeInput" style="display: none;">
                                    <input type="text" placeholder="Enter promo code">
                                    <button type="button" class="apply-promo-btn">Apply</button>
                                </div>
                            </div>

                            <div class="payment-item total">
                                <span class="payment-label">Total payment:</span>
                                <span class="payment-value total-amount">৳ {{ $course['new_price'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

        // Promo code toggle
        document.getElementById('promoCodeBtn').addEventListener('click', function() {
            const promoInput = document.getElementById('promoCodeInput');
            if (promoInput.style.display === 'none') {
                promoInput.style.display = 'block';
                this.textContent = 'Hide promo code';
            } else {
                promoInput.style.display = 'none';
                this.textContent = 'Have you a promo code?';
            }
        });

        // Form submission
        document.getElementById('paymentForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const selectedPayment = document.querySelector('input[name="payment_method"]:checked').value;
            let transactionId = '';
            
            if (selectedPayment === 'mobile_banking') {
                transactionId = document.getElementById('transaction-id').value;
            } else if (selectedPayment === 'bank') {
                transactionId = document.getElementById('bank-transaction-id').value;
            }
            
            if (!transactionId) {
                alert('Please enter a transaction ID');
                return;
            }
            
            // Show success message (backend implementation will handle actual payment verification)
            alert('Payment submitted successfully! We will verify your payment and confirm your enrollment shortly.');
        });
    </script>
</body>
</html>

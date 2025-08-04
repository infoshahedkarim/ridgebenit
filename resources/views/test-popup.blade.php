<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test Popup - Ridgeben</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fb;
            color: #002C6A;
        }

        .container {
            text-align: center;
            padding: 80px 20px;
        }

        .btn-primary {
            background-color: #002C6A;
            color: white;
            padding: 14px 28px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        /* MODAL */
        .modal {
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            display: none;
            justify-content: center;
            align-items: center;
        }

        .modal-content {
    background: #fff;
    padding: 30px;
    border-radius: 10px;
    width: 90%;
    max-width: 500px;
    position: relative;
    box-shadow: 0 0 30px rgba(0,0,0,0.1);
    transform: translateY(30px);
    opacity: 0;
    animation: slideFadeIn 0.4s ease-out forwards;
}



        .modal-title {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 20px;
            text-align: center;
        }

        .modal-content input,
        .modal-content select,
        .modal-content textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 15px;
        }

        .form-row {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .modal-content .submit-btn {
            width: 100%;
            background: #002C6A;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
        }

        .modal-content .close {
            position: absolute;
            top: 12px;
            right: 15px;
            font-size: 24px;
            color: #888;
            cursor: pointer;
        }
        @keyframes slideFadeIn {
    from {
        transform: translateY(30px);
        opacity: 0;
    }
    to {
        transform: translateY(0px);
        opacity: 1;
    }
}

@keyframes slideFadeOut {
    from {
        transform: translateY(0px);
        opacity: 1;
    }
    to {
        transform: translateY(30px);
        opacity: 0;
    }
}



    </style>
</head>
<body>

    <div class="container">
        <h1>Test Popup for Ridgeben</h1>
        <p>Click the button below to test the consultation modal.</p>
        <button id="freeConsultationBtn" class="btn-primary">Book a Free Consultation</button>
    </div>

    <!-- MODAL -->
    <div id="consultationModal" class="modal">
        <div class="modal-content">
            <span id="closeModalBtn" class="close">&times;</span>
            <h2 class="modal-title">Free Project Consultation</h2>

            <form action="#" method="POST">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="text" name="phone" placeholder="Phone Number" required>

                <div class="form-row">
                    <input type="email" name="email" placeholder="Email Address" required>
                    <select name="service" required>
                        <option value="">Select Service</option>
                        <option value="Software Development">Web Development</option>
                        <option value="Web Development">Software Development</option>
                        <option value="E-commerce Service">E-commerce Service</option>
                        <option value="Cloud Service">Cloud Service</option>
                        <option value="Mobile Development">Mobile Development</option>
                        <option value="Digital Marketing">Digital Marketing</option>
                    </select>
                </div>

                <textarea name="message" placeholder="Tell us briefly about your project" rows="4" required></textarea>

                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </div>
    </div>

    <!-- SCRIPT -->
    <script>
    const openBtn = document.getElementById('freeConsultationBtn');
    const modal = document.getElementById('consultationModal');
    const closeBtn = document.getElementById('closeModalBtn');
    const modalContent = modal.querySelector('.modal-content');

    openBtn.addEventListener('click', function () {
        modal.style.display = 'flex';
        modalContent.style.animation = 'slideFadeIn 0.4s ease-out forwards';
    });

    function closeModalWithAnimation() {
        modalContent.style.animation = 'slideFadeOut 0.3s ease-in forwards';
        setTimeout(() => {
            modal.style.display = 'none';
        }, 300); // match duration of slideFadeOut
    }

    closeBtn.addEventListener('click', closeModalWithAnimation);

    window.addEventListener('click', function (e) {
        if (e.target === modal) {
            closeModalWithAnimation();
        }
    });
</script>


</body>
</html>

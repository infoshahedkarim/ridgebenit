<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request a Proposal Modal</title>
    <style>
        /* Modal background */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7); /* Darker background for focus */
            z-index: 9999;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        /* Modal content */
        .modal-content {
            display: flex;
            width: 85%;
            max-width: 600px;
            margin: auto;
            background: #fff;
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
            transform: scale(0.95);
            transition: transform 0.3s ease-out, opacity 0.5s ease-in-out;
        }

        /* Modal show class */
        .modal.show {
            display: block;
            opacity: 1;
        }

        .modal.show .modal-content {
            transform: scale(1);
            opacity: 1;
        }

        /* Close button */
        .close {
            font-size: 30px;
            font-weight: bold;
            color: #333;
            position: absolute;
            top: 20px;
            right: 20px;
            cursor: pointer;
        }

        /* Left side (Info and Hotline) */
        .modal-left {
            flex: 1;
            padding: 20px;
            color: #333;
            border-right: 2px solid #f1f1f1;
        }

        .modal-left h3 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 15px;
            color: #002C6A;
        }

        .modal-left p {
            font-size: 16px;
            color: #555;
        }

        /* Right side (Form) */
        .modal-right {
            flex: 1;
            padding: 20px;
            color: #333;
        }

        .modal-right h2 {
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #002C6A;
        }

        /* Form Inputs */
        input, textarea {
            width: 100%;
            padding: 14px;
            margin-bottom: 15px;
            border-radius: 8px;
            border: 1px solid #ddd;
            font-size: 16px;
            color: #333;
            box-sizing: border-box;
        }

        /* Add focus effect */
        input:focus, textarea:focus {
            outline: none;
            border-color: #002C6A;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.3);
        }

        /* Textarea styling */
        textarea {
            height: 150px;
            resize: none;
            font-family: 'Arial', sans-serif;
        }

        /* Button */
        button {
            width: 100%;
            padding: 14px;
            background-color: #002C6A;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #002C6A;
        }

        /* Responsive Design */
        @media screen and (max-width: 768px) {
            .modal-content {
                flex-direction: column;
                width: 90%;
                padding: 20px;
            }

            .modal-left, .modal-right {
                padding: 15px;
            }

            .modal-left {
                border-right: none;
                border-bottom: 2px solid #f1f1f1;
            }
        }
    </style>
</head>
<body>

    <!-- Button to trigger modal -->
    <button id="openModalBtn" class="btn-main">Request a Proposal</button>

    <!-- Modal -->
    <div id="consultationModal" class="modal">
        <div class="modal-content">
            <span id="closeModalBtn" class="close">&times;</span>

            <!-- Modal Content -->
            <div class="modal-body">
                <!-- Left Side (Info and Hotline) -->
                <div class="modal-left">
                    <h3>Please fill the form correctly to get your project proposal.</h3>
                    <p>Hotline: <strong>+8801898878818</strong></p>
                </div>

                <!-- Right Side (Form) -->
                <div class="modal-right">
                    <h2>Get Your Customized Proposal</h2>
                    <form action="#" method="POST">
                        <input type="text" name="name" placeholder="Name" required>
                        <input type="text" name="phone" placeholder="Phone Number" required>
                        <input type="email" name="email" placeholder="Email" required>
                        <textarea name="description" placeholder="Enter brief description about your project (optional)"></textarea>
                        <button type="submit">Request a Proposal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById("consultationModal");

        // Get the button that opens the modal
        var btn = document.getElementById("openModalBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementById("closeModalBtn");

        // When the user clicks the button, open the modal
        btn.onclick = function() {
            modal.classList.add("show");
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.classList.remove("show");
        }

        // When the user clicks outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.classList.remove("show");
            }
        }
    </script>

</body>
</html>

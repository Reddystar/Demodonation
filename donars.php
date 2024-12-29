<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donors</title>
    <style>
        /* Global Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            padding: 20px;
        }

        /* Title Styling */
        h1 {
            text-align: center;
            font-size: 36px;
            margin-bottom: 40px;
            color: #333;
        }

        .donor-cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            justify-items: center;
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 300px;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            padding: 20px;
            text-align: center;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.1);
        }

        .card img {
            width: 100%;
            height: auto;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .card h3 {
            font-size: 22px;
            margin-bottom: 10px;
            color: #007bff;
        }

        .card p {
            color: #555;
        }

        /* Modal Styling */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            width: 70%;
            max-width: 600px;
            text-align: left;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .modal-header h2 {
            margin: 0;
            font-size: 24px;
        }

        .close {
            font-size: 30px;
            cursor: pointer;
            background: none;
            border: none;
            color: #007bff;
        }

        .modal-body p {
            font-size: 18px;
            line-height: 1.6;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .modal-content {
                width: 90%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>

    <h1>Our Beloved Donors</h1>

    <div class="donor-cards">
        <!-- Example Donor Cards -->
        <div class="card" onclick="openModal('donor1')">
            <img src="https://www.sapaviva.com/wp-content/uploads/2017/06/11S.-Srinivasa-Ramanujan-1887-1920-800x800.jpg" alt="Donor 1">
            <h3>Srinivasa Ramanujan</h3>
            <p>Generous Donor</p>
        </div>

        <div class="card" onclick="openModal('donor2')">
            <img src="https://media.assettype.com/tnm%2Fimport%2Fsites%2Fdefault%2Ffiles%2FKajal-Agarwal-Desktop-Wallpapers.jpg?w=768&auto=format%2Ccompress&fit=max" alt="Donor 2">
            <h3>kajal Agarwal</h3>
            <p>Philanthropist</p>
        </div>

        <div class="card" onclick="openModal('donor3')">
            <img src="https://c.ndtvimg.com/2024-05/gh12dg1_ms-dhoni-bcci_625x300_07_May_24.jpg?im=FeatureCrop,algorithm=dnn,width=806,height=605" alt="Donor 3">
            <h3>MS Dhoni</h3>
            <p>Supporter</p>
        </div>
    </div>

    <!-- Modal (Popup) for Donor 1 -->
    <div id="donor1" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>John Doe</h2>
                <button class="close" onclick="closeModal('donor1')">&times;</button>
            </div>
            <div class="modal-body">
                <p><strong>Full Name:</strong> Srinivasa Ramanujan</p>
                <p><strong>Donation Amount:</strong> $10,000</p>
                <p><strong>Message:</strong> "I am honored to contribute to such a meaningful cause. Keep up the great work!"</p>
                <p><strong>Location:</strong> India</p>
            </div>
        </div>
    </div>

    <!-- Modal (Popup) for Donor 2 -->
    <div id="donor2" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Kajal Agarwal</h2>
                <button class="close" onclick="closeModal('donor2')">&times;</button>
            </div>
            <div class="modal-body">
                <p><strong>Full Name:</strong> Kajal Agarwal</p>
                <p><strong>Donation Amount:</strong> $5,000</p>
                <p><strong>Message:</strong> "Proud to support this incredible initiative. Keep making a difference!"</p>
                <p><strong>Location:</strong>  USA</p>
            </div>
        </div>
    </div>

    <!-- Modal (Popup) for Donor 3 -->
    <div id="donor3" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>MS DHONI</h2>
                <button class="close" onclick="closeModal('donor3')">&times;</button>
            </div>
            <div class="modal-body">
                <p><strong>Full Name:</strong> MS dhoni</p>
                <p><strong>Donation Amount:</strong> $15,000</p>
                <p><strong>Message:</strong> "Happy to support the cause. I believe in what you're doing."</p>
                <p><strong>Location:</strong> India</p>
            </div>
        </div>
    </div>

    <script>
        // Function to open modal (popup)
        function openModal(donorId) {
            document.getElementById(donorId).style.display = "flex";
        }

        // Function to close modal (popup)
        function closeModal(donorId) {
            document.getElementById(donorId).style.display = "none";
        }

        // Close modal if clicked outside of modal content
        window.onclick = function(event) {
            if (event.target.classList.contains('modal')) {
                closeModal(event.target.id);
            }
        }
    </script>
</body>
</html>

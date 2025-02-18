<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate</title>
    <style>
        body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #e8f5e9;
    color: #333;
}

header {
    background: green;
    color: white;
    padding: 20px;
    text-align: center;
}

nav {
    margin-top: 10px;
}

nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    justify-content: center;
    gap: 15px;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-weight: bold;
}

section {
    max-width: 800px;
    margin: 40px auto;
    padding: 20px;
    background: white;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

section div {
    margin-bottom: 20px;
}

section img {
    width: 100%;
    border-radius: 10px;
}

.bank-details {
    background: #a5d6a7;
    padding: 20px;
    border-radius: 8px;
    text-align: left;
}

.bank-details h2 {
    color: darkgreen;
}

.tax-info {
    background: #dcedc8;
    padding: 15px;
    border-radius: 8px;
}

.tax-info span {
    font-weight: bold;
    color: red;
}

footer {
    text-align: center;
    padding: 15px;
    background: green;
    color: white;
}

.form-popup {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
    z-index: 100;
    width: 90%;
    max-width: 400px;
}

.form-popup label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.form-popup input {
    width: calc(100% - 10px);
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

.form-popup button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.form-popup button.cancel {
    background-color: #f44336;
}

#donateButton {
    background-color: lightslategray;
    color: black;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-top: 10px;
    display: block;
    margin-left: auto;
    margin-right: auto;
}
    </style>
</head>
<body>

    <!-- <header>
        <h1>Support Our Animals</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="adopt.html">Adopt</a></li>
                <li><a href="donate.html">Donate</a></li>
                <li><a href="stories.html">Stories</a></li>
                <li><a href="admin.html">Admin</a></li>
            </ul>
        </nav>
    </header> -->

    <section>

        <div class="bank-details">
            <h2>Bank Account and Payment Details</h2>
            <p><strong>Account Name:</strong> RESQUEANIMALSHELTER</p>
            <p><strong>Bank Name:</strong> HDFC</p>
            <p><strong>Account Number:</strong> XXXX-XXXX-XXXX</p>
            <p><strong>Branch Name:</strong> Besant Nagar</p>
            <p><strong>Account Type:</strong> Current Account</p>
            <p><strong>IFSC Code:</strong> HDFC000XXXX</p>
            <p><strong>GPay UPI:</strong> <span style="background: darkgreen; color: white; padding: 5px 10px; border-radius: 5px;">gpay@adopt</span></p>
            <p><strong>PhonePe UPI:</strong> <span style="background: darkgreen; color: white; padding: 5px 10px; border-radius: 5px;">phonepe@adopt</span></p>

            <button id="donateButton" onclick="openDonationPopup()">Donate Now</button>

            <div id="donationPopup" class="form-popup">
                <h2>Donation Details</h2>
                <label for="donorName">Name:</label>
                <input type="text" id="donorName" required><br>
                <label for="donorAmount">Amount:</label>
                <input type="number" id="donorAmount" required><br>
                <label for="donorAccount">Account Number:</label>
                <input type="text" id="donorAccount" required><br>
                <button onclick="submitDonation()">Submit</button>
                <button class="cancel" onclick="closeDonationPopup()">Cancel</button>
            </div>
        </div>

        <div class="tax-info">
            <h2>Instructions for Tax Receipt</h2>
            <p>To receive an 80G tax receipt, please send your <span style="font-weight: bold; color: red;">Name, Phone Number, and PAN Card Number</span> to <strong>finance@rescueanimalshelter.in</strong>.</p>
        </div>
    </section>

    <footer>
        <p>Contact: <a href="mailto:rescue@animalshelter.com" style="color: yellow;">rescue@animalshelter.com</a> | Phone: +123 456 7890</p>
    </footer>

    <script>
        function openDonationPopup() {
    document.getElementById("donationPopup").style.display = "block";
}

function closeDonationPopup() {
    document.getElementById("donationPopup").style.display = "none";
}

function submitDonation() {
    const name = document.getElementById("donorName").value;
    const amount = document.getElementById("donorAmount").value;
    const account = document.getElementById("donorAccount").value;

    if (!name || !amount || !account) {
        alert("Please fill in all fields.");
        return;
    }

    const donationData = {
        name: name,
        amount: amount,
        account: account,
        date: new Date().toISOString().split('T')[0],
        time: new Date().toLocaleTimeString(),
        bank: "HDFC" // You might want to make this dynamic if you have multiple bank options
    };

    let donations = JSON.parse(localStorage.getItem('donations')) || [];
    donations.push(donationData);
    localStorage.setItem('donations', JSON.stringify(donations));

    alert("Thank you for your donation!");
    closeDonationPopup();

    // Clear the form fields after successful submission:
    document.getElementById("donorName").value = "";
    document.getElementById("donorAmount").value = "";
    document.getElementById("donorAccount").value = "";
}
    </script>

</body>
</html>
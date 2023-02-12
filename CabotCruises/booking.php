<?php
$clientLocation = 'book';
$title = "Book a Cruise";
include('_top.php')
    ?>

<section id="BookingPage">
    <h1>
        <?php echo $title; ?>
    </h1>
    <div class="booking">
        <form>
            <div>
                <label for="fullname">Full Name</label>
                <input required type="text" name="fullname" id="fullname-input">
            </div>
            <div>
                <label for="address">Address</label>
                <input type="text" name="address" id="address-input">
            </div>
            <div>
                <label for="city">City</label>
                <input type="text" name="city" id="city-input">
            </div>
            <div>
                <label for="state">State</label>
                <select name="state" id="state-input">
                </select>
            </div>
            <div>
                <label for="zipcode">Zipcode</label>
                <input type="text" name="zipcode" id="zipcode-input">
            </div>
            <div>
                <label for="phone">Phone Number</label>
                <input type="tel" name="phone" id="phone-input">
            </div>
            <div>
                <label for="email">Email</label>
                <input required type="email" name="email" id="email-input">
            </div>
            <div>
                <label for="cruise">Cruise Selection</label>
                <select name="cruise" id="cruise-input">
                </select>
            </div>

            <button type="submit">Book My Cruise</button>
        </form>
    </div>
</section>

<script>
    const states = ['Select a State', 'Alabama', 'Alaska', 'American Samoa', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut', 'Delaware', 'District of Columbia', 'Federated States of Micronesia', 'Florida', 'Georgia', 'Guam', 'Hawaii', 'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Marshall Islands', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire', 'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota', 'Northern Mariana Islands', 'Ohio', 'Oklahoma', 'Oregon', 'Palau', 'Pennsylvania', 'Puerto Rico', 'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont', 'Virgin Island', 'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming']
    const stateInput = document.querySelector('#state-input')
    states.forEach((state, i) => {
        const option = document.createElement('option')
        option.textContent = state

        if (i === 0) {
            option.defaultSelected = true
        }

        stateInput.appendChild(option)
    })

    const cruises = ['Please Select...', 'Europe', 'Mediterranean', 'Greece', 'Italy', 'Caribbean', 'Bahamas', 'Bermuda', 'Alaska', 'Hawaii']
    const cruiseInput = document.querySelector('#cruise-input')
    cruises.forEach((cruise, i) => {
        const option = document.createElement('option')
        option.textContent = cruise

        if (i === 0) {
            option.defaultSelected = true
        }

        cruiseInput.appendChild(option)
    })
</script>

<?php include('_bot.php') ?>
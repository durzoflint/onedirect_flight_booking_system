# OneDirect Flight Booking System

This repository is made for OneDirect Assessment.

The purpose of this project is to make a flight booking system.

The project is hosted at [http://srmvdpauditorium.in/aaa/onedirect/](http://srmvdpauditorium.in/aaa/onedirect/)

The working is fairly simple. Just enter your details to search for available flights and book whichever you choose.
A booking token will be regenerated which will be saved as your booking id. The token will be unique as per every booking.
Additionally, you can mail your booking token to your email ID so as the passenger doesn't lose it.

The welcome Page looks as follows
![Welcome Page 1](http://srmvdpauditorium.in/aaa/onedirect/images/Welcome%20page%202.png)
![Welcome Page 2](http://srmvdpauditorium.in/aaa/onedirect/images/Welcome%20page.png)

After entering the details, the flight list page is as follows
![Flight List](http://srmvdpauditorium.in/aaa/onedirect/images/Flight%20List.png)

After selecting/booking a specific flight you see your confirmation as follows
![Booking Confirmation](http://srmvdpauditorium.in/aaa/onedirect/images/Booking%20Confirmation.png)

Further, you can mail this booking id which will be recived as follows:
![Mail Confirmation](http://srmvdpauditorium.in/aaa/onedirect/images/Mail%20Confirmation.png)
![Mail](http://srmvdpauditorium.in/aaa/onedirect/images/Mail.png)
***
# Database

The Database has three tables as follows:
![Database Tables](http://srmvdpauditorium.in/aaa/onedirect/images/Database%20table.png)

The flights table consits of all flight related information as follows:
![Flights Table](http://srmvdpauditorium.in/aaa/onedirect/images/Flights%20Table.png)

The cities consists of the list of cities in this use case:
![Cities Table](http://srmvdpauditorium.in/aaa/onedirect/images/Cities%20Table.png)

The booking table stores all bookings with the booking id:
![Booking Table](http://srmvdpauditorium.in/aaa/onedirect/images/Booking%20Table.png)

The insertion in database tables was done as shown below:

```INSERT INTO `flights`(`source`, `destination`, `max_capacity`, `name`, `image_url`, `depart_time`, `arrival_time`, `duration`, `price`) VALUES ('Chennai', 'Delhi', '50', 'Flight006', 'https://www.farehawker.com/img/image/Airline-flight/elal-flight-image.jpg', '18:00', '20:00', '2 hrs', '6000')```

The database file can be found [here](http://srmvdpauditorium.in/aaa/onedirect/db/onedirect_flightsystem.sql).

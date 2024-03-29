# PHP_OOP

Hotel reservation system

Create a hotel reservation system where guests book rooms for a given period of time.
• Room – a class for all rooms. Holds room information and an array of reservations. Implements
ReservableInterface. Implement several types of rooms as subclasses:
o Single room – 1 bed, Standard room, with restroom, no balcony, extras – TV, air-conditioner
o Bedroom – 2 beds, Gold room, with restroom and balcony, extras – TV, air-conditioner, refrigerator, mini-
bar, bathtub
o Apartment – 4 beds, Diamond room, with restroom and balcony, extras – TV, air-conditioner, refrigerator,
kitchen box, mini-bar, bathtub, free Wi-fi
3
• Keep the following room information for each room: room type (can be Standard, Gold or Diamond), has
restroom, has balcony, bed count, room number, extras (e.g. TV, air-conditioner, refrigerator, etc.) and
price
• Guest – holds first name, last name
• Reservation – holds startDate and endDate, representing the time period when the room is booked, and guest

Implement the following interface:
• ReservableInterface – holds methods addReservation($reservation) and removeReservation($reservation)
7 Encapsulate all class properties. Override the __toString() method for each class to print information about the
object.
Write a static class BookingManager with method bookRoom($room, $reservation) that handles room booking and
prints a message whether the operation was successful or not.
10 Autoloader has to be used. Namespaces have to be used. Single class per file.
Bonus:
• Create a custom exception ReservationException, which should be thrown if a reservation already exists in that
period.


Output:

Room <strong>1408</strong> successfully booked for <strong>Vardenis Pavardenis</strong>
from <time>2019-04-20</time> to <time>2019-04-25</time>!

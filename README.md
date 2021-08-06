# Chobiwala-Buy Your photos and hire the photographers

-------Use Case Scenario (Additional Details)------



Use Case Name: User Registration

Actor: User

Scenario:

1.	Input User ID, Password, First Name, Last Name, Email Address.
2.	Confirm User ID , Password.
3.	Store new user registration into database.


Exception:
1.	Required page not found.
2.	No database connection.


Precondition:

1.	User must have click the login option, then user should able to show the login and registration form to the web application.



Post condition:
1.	Successful- Registered account and refer to the login page.
2.	Unsuccessful-Stay in same page and display the correction message that is email address in wrong format/email address don’t match/password don’t match, please try again.



Use Case Name: User Login

Actor: User

Scenario: 

1.	Input User ID and Password.
2.	Check User ID and Password.
3.	Remember Password.
Exception:

1.	Required page not found.
2.	No database connection.

Precondition:

1.	User must be registered in this system, then he/she should able to login the system.
Post condition:

1.	Successful:  Valid user login and refer to the home page.
2.	 Unsuccessful: Display correction message. Incorrect email or password, please try again.


Use Case Name: Cart


Actor: Customer

Scenario:

1.	User buy photos with cart function.
2.	Cart function consists of photos name, price, checkout option.
3.	User choose photos and they should able to order.
4.	System validates the customer address.
5.	System display the confirmation screen to the customer.
6.	Email is sent to the customer with order details.

Exception:

1.	Required page not found.

Precondition:

1.	User must login into the system.
2.	User must add at least one item into the cart.


Post condition: 

1.	Successful: - Show order confirmation page and display the message “order is confirm, you will get a call soon”.
2.	Unsuccessful: Display correction message that is fill up your phone number/email address.





Use Case Name: Photographer Validation

Actor: Photographer

Scenario:

1.	Input First Name, Last Name, Email Address, Photos, Password.
2.	Confirm Password.
3.	Have to wait for the confirmation.
4.	Store new user registration into database.

Exception:
1.	Required page not found.
2.	No database connection.

Precondition:
1.	Photographer must submit the photos for validation or get confirmation from the admin.
2.	Photographer must follow all the terms and condition.
3.	Must complete all the procedure.


Post condition: 

1.	Successful- Registered account and refer to the login page.
2.	Unsuccessful-Stay in same page and display the correction message that is email address in wrong format/email address don’t match/password don’t match, please try again.








Use Case Name: Hire photographer

Actor: User 
Scenario:
1.	User can hire photographers using hire function.
2.	hire function consists of photographer name, working time, photographer details, hire option.
3.	User can view photographer profile and photos.
4.	System validates the user address.
5.	System display the confirmation screen to the user.
6.	Email is sent to the user with details.
Exception:
1.	Required page not found.
2.	Photographer is unavailable for some reason.
3.	Photographer can not be there on time for some reason.
4.	Photographer can be sick.


Precondition:
1.	User must be registered with the system.
2.	User must be login the system.
3.	User must check the photographer details.

Post condition: 
1.	Successful: - Show confirmation page and display the message “Thank You, you will get a call soon”.
2.	Unsuccessful: User must be registered with the system or have to give proper information which is must.





Use Case Name: Package 

Actor: User 

Scenario:

1.	Different type of Package options.
2.	Package description and individual information.
3.	Select option from different type of Package.


Exception:

1.	Package is not available for this time.
2.	Package is out of date.
3.	Package is under processing.

Precondition:

1.	User must be registered with the system.
2.	User must be login the system.
3.	User must check the package details.

Post condition: 

1.	Successful: - Show confirmation page and display the message “Thank You, you will get a call soon”.
2.	Unsuccessful: Display the unsuccessful message.






Use Case Name: Delivery Photos

Actor: User 

Scenario:

1.	Input user name and password.
2.	Change options for delivery.
3.	Confirm user name and password.
4.	Get update on database.

Exception:

1.	Already delivered and product is on the way.
2.	Not in the coverage area.
3.	It will cost a little more.


Precondition:

1.	User must be registered with the system.
2.	Give the proper information.
3.	On emergency condition.


Post condition: 

1.	Successful: - Show confirmation page and display the message “Thank You, you will get a call soon”.
2.	Unsuccessful: Display the unsuccessful message.






Use Case Name: View History

Actor: User 

Scenario:

1.	Recent purchase items.
2.	Purchase date and delivery method.
3.	View order description.
4.	View delivery methods.

Exception:

1.	Required page not found.
2.	No database connection.



Precondition:

1.	User must be registered with the system.
2.	User must be loge in.
3.           User must purchase some items before.


Post condition: 

1.	Successful: - View the history and the purchase related information. 
2.	Unsuccessful: - Missing data information.




Use Case Name: Ratting  Photos

Actor: User 

Scenario:

1.	User profile.
2.	Photos from the gallery.
3.	Picture Quality and description about the photos.
4.	Retting options.
5.	Comment and like option.


Exception:

1.	Required page not found.
2.	No database connection.



Precondition:

1.	User must be registered with the system.
2.	User must be loge in.



Post condition: 
3.	Successful: -  Notification Massage about retting .
4.	Unsuccessful: - Missing data information.





Use Case Name: Admin profile.

Actor: Admin

Scenario:

1.	Admin profile Photo, name and id.
2.	Notification about new register.
3.	Request about new photographer.
4.	Purchase item history.
5.	Order list and delivery time.
6.	Add photographer option.
7.	Add photos option.


Exception:
1.	No database connection.
2.	Page not found.
3.	Wrong password.
4.	Wrong id.


Precondition:

1.	Admin must be registered.
2.	Must use proper user id.


Post condition: 

5.	Successful: -  Successfully add photos, photographer and have delivery report .
6.	Unsuccessful: - Missing data information.

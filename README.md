<p align="center"><img src="https://res.cloudinary.com/dvpqug4qv/image/upload/v1588119123/go_manage_mxmker.png" width="400"></p>

## About GO Manage

The initial intention of Go Manage, was to help the business to centralize the App. Initially wanted to build the
app via Laravel and Vue, as way to scale the app fairly quickly. Partial API integration, as a way to expand my app
onto other platforms.

Please note that the user interface supposed to be Desktop First, and not mobile. As in future, I have intentions
in expanding the App to support either Progressive Web App or Native App.

My choice in choosing Laravel to integrate this project, was mainly to understand MVC pattern, and how to organize
my project better. In addition, it helped me to understand better regards database migrations, database relations, seeds, and factories
that I took advantage when I am creating different tests.

#### Features
* Being able to create new orders, with an order number and assigning drivers.
* Viewing completed orders
* Partial API integration.

<img src="https://res.cloudinary.com/dvpqug4qv/image/upload/v1588259274/go_manage_3_v7mgti.png">

#### Issues to be fixed
* Timer: Currently the timer does not stop. Initial approach, create an **OrderTimeController** which will keep in
track of all the orders. With the models, currently having the attributes of: `primary_key:id`, `foreign_key:order_id`, 
`created_at`, `accepted_at`, `delivering_at` and `completed_at`
* Whenever `driver_id:null` is being mutated, it does not reflect the changes being made on Vue.
* Partial VueChart have been implemented. Requires reactive data to be passed via props.

#### To be implemented
* Able to see out of stock items via the menu
* Implement driver's tips (extend Order model).

<hr>

#### Get in touch
Feel free to contact me via E-mail or LinkedIn:

**email:** akiraff@hotmail.com <br>
**LinkedIn:** https://linkedin.com/in/Akiraff

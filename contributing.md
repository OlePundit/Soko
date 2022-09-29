The application is built in laravel, vue.js, bootstrap, html and css. Please go over the README file to get acquainted with what the app does. So if you navigate to the view files, you will
come across a file called create.blade.php. In it, there is a vue tag called, create-product, which connects to a vue component called CreateProduct.vue. So this enables the
client to enter details about the product, including a picture of the product, and upload it to the database. The data is handled by a function called store, located in the ProductsController, which validates
all the data, and sends it to the database. I am using axios post to send over the data from the vue compoent. However I keep on getting a null error whenever I attempt to upload
an image, meaning that vue is either sending over a null field, or laravel is not parsing the file correctly. I suspect the latter. When I remove the image field altogether, I still get an array key
error, which means there is still a problem with parsing the rest of the data. I have still not been able to hook the vue component correctly to the backend. I am going to put hacktober fest tags on the specific location of the errors

Any suggestions that would improve the application are much welcome. Please avoid pushing changes to the branch called base1, because this is a test version of the app.

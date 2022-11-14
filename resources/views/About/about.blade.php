@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-10 offset-2">
            <h1><strong>About SellorBuyKe</strong></h1>
            <div class="d-flex col-lg-12 col-sm-4 col-md-6">
                <p class="explainer">
                Sellorbuyke.com is an online site where wines and spirits shops near you can sell online in Kenya for free. Our app helps you to get more sales and customers. 
                If you want to buy alcohol from liquor stores near you then look no further.
                </p>
                <img src="/storage/about/about1.png" width="400" height="400" alt="Aboutsellorbuy">
            </div>
            <button class="btn btn-primary text-white mb-3">EXPLORE</button>
            <h2><strong>Why Buy or Sell on SellorBuyKe?</strong></h2>
            <ol class="explainer">
                <li>It’s free and easy to use</li>
                <li>We offer you the best assortment of liquor, sourced from all corners of the world. Right at the homepage, you will find some of our best deals.
                    Use the search button to find the beverage of your choice. 
                </li>
                <li>No registration needed for buyers</li>
                <li>Easy registration process for sellers</li>
            </ol>

            <h2><strong>How to sell on SellorBuyKe</strong></h2>
            <div class="d-flex col-lg-12 col-sm-4 col-md-6">
                <div>
                    <h3><strong>Registering your account and creating a shop</strong></h3>
                    <ol class="explainer">
                        <li>Click on Register at the top right of the homepage, fill in the details then submit.</li>
                        <li>At the top of the home page click 'My shop'</li>
                        <li> You will be redirected to your shop page,where you can upload, edit, view your products and connections.</li>
                        <li>To edit your shop bio, click on the 'edit shop' button at the top of the page.</li>
                        <li>You will be redirected to the shop edit page, where you can add your shop description; describe 
                        what services or products you sell, your location, whether or not you provide delivery services, or a link to your website (if you have one).Once you are done, click 'save shop', and you will be 
                        redirected back to your shop page.</li>
                    </ol>
                </div>
                <img src="/storage/about/about2.png" width="400" height="400" alt="sellingonsellorbuyKe">
            </div>
            <button class="btn btn-primary text-white mb-3">REGISTER</button>
            <h3><strong>Uploading a product</strong></h3>
            <ol class="explainer"> 
               <li>To create a product, click on 'add product' button at the top of the page.</li>
               <li>You will be redirected to the product upload page, where you will need to fill in all the product details and upload an image
               of the item on sale.</li>
               <li>Its recommended that you be as elaborate as possible when providing the description. This will help to attract more users to your product</li>
               <li>Finally, click on 'save product'.</li>
            </ol>
            <h3><strong>Editing a product</strong></h3>
            <ol class="explainer">
                <li>To edit your product, click on the specific product you want to change.</li>
                <li>The site will redirect to the product page, where you will see an expanded version of your product together with its details</li> 
                <li>Click on 'edit product'. The site will go to the product edit page, where you can edit the specific field you want to change, and then you can press 'save product' when done.</li>
                <li>Its especially important to edit the stock status field, when products go out of stock.</li>
            </ol>
            

            <p class="explainer">Your shop page is your gateway to the world. It serves as a webpage containing your full product catalogue.<p>
            <p class="explainer">Imagine you are with acquaintances, somewhere far away from your shop,
               and one of them asks you whether you have their favourite drink at your shop. You can easily share the link to your shop page, and the prospective client will be able to have a look at everything you have on offer, inclusive of prices. You can even organise
               delivery services so that there is no need for the prospective client physically come to your premises. 
            </p>

            <h3><strong>Connect</strong></h3>
            <p class="explainer">
               Lastly, at the top of your shop page, you should see a connect button. Basically, other shop owners can connect to you, you can engage, share contacts, and even transact business.
               You should also convince your customers to create a shop and connect to you so that they can view your products when they visit the explore page.
            </p>
            <p class="explainer">
                Otherwise, happy trading on SellorbyKe. Connect, transact, and enjoy!
            </p>

        </div>
    </div>
</div>
@endsection
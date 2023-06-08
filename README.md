Create a new theme and apply the theme only for list page.
==============================

Steps to Install and configure Networldsports/categorytheme theme
==============================

Step1 : Place the Networldsports/categorytheme folder inside your app/design/frontend
Step2 : run "bin/magento setup:upgrade" Command to install the theme.
step3 : Run static content deployment. bin/magento setup:static-content:deploy -f.
Step4 : Flush caches. bin/magento cache:flush.
step5 : Now go to admin->content->design->Themes. you can see the custom theme "Networldsports/categorytheme" listed in the grid.

Steps to Install Networldsports_ListTheme module
==============================

Step1 : Place the Networldsports/ListTheme module folder inside your app/code
Step2 : Make sure that you are in the developer mode. Install module by running "bin/magento setup:upgrade" Command.
step3 : Run static content deployment. bin/magento setup:static-content:deploy -f.
Step4 : Flush caches. bin/magento cache:flush.
step5 : Now you can see the applied "Networldsports/categorytheme" theme on all the list page.

Steps to verifyGraphQl
==============================

graphQl end point is created in the Networldsports_ListTheme module. You can verify that in 

URL : http://base_url/graphql/

You can use the below query to get the product list of specific category


{
  productCollection{
    allProducts {
      sku
      name
      price
      image
    }
  }
}

The out put looks like 
{
  "data": {
    "productCollection": {
      "allProducts": [
        {
          "sku": "test-prod1",
          "name": "test-prod1",
          "price": 10,
          "image": null
        }
      ]
    }
  }
}

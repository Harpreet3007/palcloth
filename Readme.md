Step 1:
Install project in drupal 10, Custom theme with tailwind and maintain it on git hub.

Step 2:
Install basic modules Commerce, translastion and other basic modules do the initial setup with default language hindi, second language english only.

Step 3:
Roles
======
1. Adminstator (developer)
2. Owner (Shop owner with limited admin access)
3. Partners (Investors)


Custom modules:
================

Owner Role Dashboard:
========================
1. Can Create/Update/Delete his orders.
2. Can view his orders (His orders always shows status completed).Order view always shows row according order items.Order item shows the coloum Product title, Parnter name to vich it belongs, profit breakdown, etc. will add when project in progress.
Profit Breakdown include paramater
- Owner Profit
- Partner Profit
- Shop Expense
- Shop Advertisment
- Shop Dead Stock Expense
3. Can view online customer orders.Order view always shows row according order items.Order item shows the coloum Product title, Parnter name to vich it belongs, profit breakdown, etc. will add when project in progress.
Profit Breakdown include paramater
- Owner Profit
- Partner Profit
- Shop Expense
- Shop Advertisment
- Shop Dead Stock Expense
4. Can Create/Update/Delete any products.
5. Products view include Product variation, Product Title, its stock, cost price(including GST), sku, selling price, Partner name to which the product belong, profit breakdown, etc. will add when project in progress.
Profit Breakdown include paramater
- Owner Profit
- Partner Profit
- Shop Expense
- Shop Advertisment
- Shop Dead Stock Expense
6. Produts view header include
Filter:
Date Range, Sort by Created (old/new), Product Title, Sold/unsold status, Partner name (Dropdown list) etc will add when project in progress.
These all work with PDF Export.
7. Owner Dahboard Main Page show following stats:
- Add New Partner (Takes to create partner custome form/webform which create new user with role partner)
- Number of Partners (Click to partners list page)
- Total amount spent by Partners.
- Total number of Products (click to products view)
- Total unsold Products (click to products view with filter)
- Total sold Product (click to products view with filter)
- Total Profit by Owner Till Date. (Owner Profit) (click to graph of profit day wise - lower priority)
- Total Profit of Partners Till Date. (All Partners Profit) (click to graph of profit day wise - lower priority)
- Total amount settled (amount paid to partner direct paid or after reedem request). (Button which take owner to settlement page).
- Total amount of Partners Profit yet to Pay. (Button which take owner to settlement page).
8. Partners Page shows list of all partner click on partner takes to partner profile page which shows partner basic details, amount invested, partner total profit till date, profit reedem till date, remaining profit to reedem, etc will add after project in progress.
9. Create Partner:
Custom form webform to create user with role partner with basic details name, phone number , email, amount invested, profit percentage.
10. Partner Messages:
Page shows all partner recent messages, provide a form with texfield message and checkbox with option mark resolved/in progress which sent email and status to partner dashboard.
11. Settlement:
- Settle profit for Partner
Form/webform fields:
Partner name (entity reference autocomplete /dropdown field)
Settle amount (validate must be equal to amount requested by parter to reedem and amount must be leass than equal to total earning yet to reedem) update partner entity accordingly.
after submit update profit od partner details all places respectively.
- Settle Investment of partner
Select case : Investment reedem request/ Contact Turminate request
Settle Amount:
    if investment reedem request:
        settle amount (validate must be equal to amount request by partner and less than 10% of total investment)
    if Contact turminate request:
        settle amount field disabled (amount will be locked to 10% of total investment)
        Amount paid till date. (field disabled)
        Number of installment paid. (field disabled)


Partner Role Dashboard:
==========================
1. Can not Create/Update/Delete any order.
2. Can not Create/Update/Delete any products.
3. View orders of his ownership.
4. View products of his ownership.
5. Products view include Product variation, Product Title, its stock, cost price(including GST), sku, selling price, profit breakdown, etc. will add when project in progress.
Profit Breakdown include paramater
- Owner Profit
- Partner Profit
- Shop Expense
- Shop Advertisment
- Shop Dead Stock Expense
6. Produts view header include
Filter:
Date Range, Sort by Created (old/new), Product Title, Sold/unsold status,etc will add when project in progress.
These all work with PDF Export.
7. Partner Dahboard Main Page show following stats:
- Total amount spent by Partner.
- Total number of Products (click to products view)
- Total unsold Products (click to products view with filter)
- Total sold Product (click to products view with filter)
- Total Earnings Till Date. (Partner Profit)
- Total Earnings yet to reedem.
etc will add when project progress.
8. Contact Owner:
Webform/Form to send message to Owner for any query or complain have following field:
- Parnter name, email and phone number (auto filled disabled)
- Meassage textfield
After submit email will send on owner email and also shows on owner dasboard sections.
9. Reedem Amount:
Status Block (Right sidebar shows status of latest reedem request with a button of detail status report page which showls all the history)
2 different Form/webform:
- Reedem Profit:
Select amount to reedem (less than equal to partner profit)
After submit display a message your reedem amount will add in your account within 10 days and update status block with recent message.
- Reedem Investment
First display label you can reedem upto 10% of your investment in a month by slecting this your net spent amount will be updated and astock of this amount will detucted from your Products.
Select amount to reedem (less than equal to 10% of partner investment)
After submit display message your reedem amount will add in your account within 1 month.
10. Terminate Contact:
Display message, by pressing the terminate button yor investment amount will be refunded you in 10 equal installment of 10 months and your profit percentage will be down 50%.
Click terminate will show the popup to confirm termination that confirmation pop up will require a partner account password and OTP to his mobile and email.

For point 9 and 10 try to make months/days and percentage dynamic.


customer view/functionality yet to plan





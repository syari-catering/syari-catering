<!DOCTYPE html>
<html lang="en" >
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta charset="UTF-8">
 <title>Example Invoice</title>
 <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
</head>
<body>
 <html lang="en">
 <head>
  <meta charset='UTF-8'>
  <title>Editable Invoice</title>
 </head>
 <body>
     <br></br><br></br>
<div class="container">	
  <div id="page-wrap">
   <textarea id="header">INVOICE</textarea>
   <div id="customer">
    <img id="image" style ="height:50px" src="{{ asset('asset/img/baru.png') }}"  alt="logo" />
    <br><textarea id="customer-title">Syari Catering</textarea></br>
   <div id="identity">  
    <div id="logo">
     <div id="logoctr">
      <a href="javascript:;" id="change-logo" title="Change logo">Change Logo</a>
      <a href="javascript:;" id="save-logo" title="Save changes">Save</a>
      <a href="javascript:;" id="delete-logo" title="Delete logo">Delete Logo</a>
      <a href="javascript:;" id="cancel-logo" title="Cancel changes">Cancel</a>
     </div>
     <div id="logohelp">
      <input id="imageloc" type="text" size="50" value="" /><br />
      (max width: 540px, max height: 100px)
     </div>
    </div>
   </div>
   <textarea id="address">Melayani catering dan delivery makanan Alamat:Surabaya....... Phone:0856767676</textarea>
   <div style="clear:both"></div>
    <table id="meta">
     <tr>
      <td class="meta-head">Invoice #</td>
      <td><textarea>1A2CBS</textarea></td>
     </tr>
     <tr>
      <td class="meta-head">Date</td>
      <td><textarea id="date">October 05, 2018</textarea></td>
     </tr>
     <tr>
      <td class="meta-head">Amount Due</td>
      <td><div class="due">$1500000</div></td>
     </tr>
    </table>
   </div>
   <table id="items">
    <tr>
     <th>Nama Pemesan</th>
     <th>Alamat</th>
     <th>Harga</th>
     <th>Jumlah Porsi</th>
     <th>Total</th>
    </tr>

    <tr class="item-row">
     <td class="item-name"><textarea>Building Maintenance Management</textarea><a class="delete" href="javascript:;" title="Remove row"></a></td>
     <td class="description"><textarea>Very useful building repair application hehehe tetet...</textarea></td>
     <td><textarea class="cost">$1000.00</textarea></td>
     <td><textarea class="qty">1</textarea></td>
     <td><span class="price">$1000.00</span></td>
    </tr>
    <tr class="item-row">
     <td class="item-name"><textarea>Car rental Application</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></td>
     <td class="description"><textarea>Car rental and rental application that is very useful hehehe ...</textarea></td>
     <td><textarea class="cost">$200.00</textarea></td>
     <td><textarea class="qty">3</textarea></td>
     <td><span class="price">$600.00</span></td>
    </tr>
    <tr class="item-row">
     <td class="item-name"><textarea>AI application building layout plan</textarea><a class="delete" href="javascript:;" title="Remove row"></a></td>
     <td class="description"><textarea>AI application for building arrangement is very useful hehehe .....</textarea></td>
     <td><textarea class="cost">$100.00</textarea></td>
     <td><textarea class="qty">1</textarea></td>
     <td><span class="price">$100.00</span></td>
    </tr>      
    <tr id="hiderow">
     <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
    </tr>
    <tr>
     <td colspan="2" class="blank"> </td>
     <td colspan="2" class="total-line">Subtotal</td>
     <td class="total-value"><div id="subtotal">$1700.00</div></td>
    </tr>
    <tr>
     <td colspan="2" class="blank"> </td>
     <td colspan="2" class="total-line">Total</td>
     <td class="total-value"><div id="total">$1700.00</div></td>
    </tr>
    <tr>
     <td colspan="2" class="blank"> </td>
     <td colspan="2" class="total-line">Amount Paid</td>
     <td class="total-value"><textarea id="paid">$100.00</textarea></td>
    </tr>
    <tr>
     <td colspan="2" class="blank"> </td>
     <td colspan="2" class="total-line balance">Balance Due</td>
     <td class="total-value balance"><div class="due">$1600.00</div></td>
    </tr>
   </table>
   <br><br><br><br>
  </div>
</div>
</body>
</html>
 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
 <script  src="js/index.js"></script>
</body>
</html>
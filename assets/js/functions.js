var item_brand = [];
var item_price = [];
var item_qty = [];
var item_size = [];
var item_url = [];
var item_shipping = [];
var item_color = [];
var item_request = [];
var grand_total = 0;
var total = 0;
var shipping_total = 0;
var price_total = 0;
var total_price = 0;
var service_charges = 0;
var item_no = 0;
var shipping_value = 110;

function incHeight() {
  var el = document.getElementById("invoice");
  var height = el.offsetHeight;
  var newHeight = height + 200;
  el.style.height = newHeight + "px";
}
var form = document.getElementById("myform");
form.addEventListener("submit", check);
function check2() {
  console.log("jjjj");
  // return false;

  
    
  
  
}

function check() {
    event.preventDefault();
  var data = new FormData();
  // var brand = document.getElementById("brand").value
  data.append("brand", document.getElementById("brand").value);
  data.append("url", document.getElementById("url").value);
  data.append("shipping", document.getElementById("shipping").value);
  data.append("qty", document.getElementById("qty").value);
  data.append("size", document.getElementById("size").value);
  data.append("color", document.getElementById("color").value);
  data.append("price", document.getElementById("price").value);
  data.append("request", document.getElementById("request").value);
  console.log(data, "data");
  //   var x = document.getElementById("alert");
  //   if (x.style.display === "block") {
  //     x.style.display = "none";
  //   }
  var xhr = new XMLHttpRequest();
  console.log("hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh");
  xhr.open("POST", "form.php");
  xhr.onload = function () {
    // console.log(this.response)
    console.log("jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj");
    console.log(data, "data2");
    console.log(this.response);
    var formdata = JSON.parse(this.response);
    if (formdata.urlcheck != "Okay") {
      //   console.log(formdata);
      //   var x = document.getElementById("alert");
      //   if (x.style.display === "none") {
      //     x.style.display = "block";
      //   } else {
      //     x.style.display = "none";
      //   }
    } else {
      //   var x = document.getElementById("alert");
      //   if (x.style.display === "block") {
      //     x.style.display = "none";
      //   }

      item_brand.push(formdata.brand);
      item_shipping.push(formdata.shipping);
      item_url.push(formdata.url);
      item_price.push(formdata.price);
      item_color.push(formdata.color);
      item_size.push(formdata.size);
      item_qty.push(formdata.quantity);
      item_request.push(formdata.request);
      item_no = item_brand.length;

      if (formdata.brand != 69) {
      }
      var myobj = document.getElementById("emptycart");
      if (myobj) {
        myobj.remove();
      }
      $("#producttable").append(
        "<tr class='cart-item'>" +
          "<td style='vertical-align: middle'><img style='height: 100px;' src='assets/images/brands/" +
          formdata.brand +
          ".png' ></img>  </td>" +
          // "<td style='vertical-align: middle'>" + formdata.url  + "</td>"+
          "<td style='vertical-align: middle;'> Rs: " +
          formatNumber(formdata.price) +
          "</td>" +
          "<td style='vertical-align: middle'>" +
          formdata.quantity +
          "</td>" +
          "<td style='vertical-align: middle'>  Rs: " +
          formatNumber(formdata.shipping) +
          "</td>" +
          "<td style='vertical-align: middle'> Rs: " +
          formatNumber(formdata.price * formdata.quantity + formdata.shipping) +
          "</td>" +
          "<td class='product-remove'> <i onclick='productdelete(this)' class='nc-icon-outline ui-1_circle-remove'></i></td>" +
          "</tr>"
      );
      showTab(currentTab);
      // console.log(item_brand)
      console.log(formdata);
      var elem = document.getElementById("invoicebox");
      elem.scrollIntoView();
      document.getElementById("myform").reset();
      calculateprice();
    }
  };

  xhr.send(data);

  // (C) PREVENT HTML FORM SUBMIT
  return false;
}

function calculateprice() {
  shipping_total = price_total = 0;
  for (var i = 0; i < item_shipping.length; i++) {
    // console.log(i)
    shipping_total = shipping_total + item_shipping[i];
    price_total = price_total + item_qty[i] * item_price[i];
  }

  total_price = parseInt(shipping_total) + parseInt(price_total);
  console.log(total_price, "total");
  // grand_total += parseInt(total_price)
  // console.log(item_shipping)
  console.log(total_price, "shipping");
  shipping_value = document.getElementById("delivery").value;
  console.log(document.getElementById("delivery").value);
  changeshipping();
}

function productdelete(ctl) {
  // console.log(ctl.rowIndex)

  $("#producttable")
    .find("tr")
    .click(function () {
      console.log($(this).index());
      index = $(this).index() - 1;
      console.log(index);
      $(ctl).parents("tr").remove();
      if (index > -1) {
        item_brand.splice(index, 1);
        item_price.splice(index, 1);
        item_qty.splice(index, 1);
        item_size.splice(index, 1);
        item_url.splice(index, 1);
        item_shipping.splice(index, 1);
        item_color.splice(index, 1);
        item_request.splice(index, 1);
        item_no = item_brand.length;
      }
      calculateprice();
      showTab(currentTab);
      // console.log(item_brand)
    });
}

function changeshipping() {
  // console.log("jjjj")
  shipping_value = document.getElementById("delivery").value;
  if (document.getElementById("delivery").value == 110) {
    // grand_total = parseInt(total_price)
    service_charges = total_price * 0.1;
    grand_total = parseInt(total_price) + parseInt(service_charges);
  } else {
    grand_total = parseInt(total_price);
    service_charges = 0;
  }
  var myobj = document.getElementById("service-charges");
  myobj.remove();
  var obj = document.getElementById("total-charges");
  obj.remove();
  $("#checkout").append(
    "  <tr id='service-charges'>" +
      "<td  style='color: black;'>Service Charges</td>" +
      "<td  style='color: black;'> Rs: " +
      formatNumber(service_charges) +
      "</td>" +
      "</tr>"
  );
  $("#checkout").append(
    "  <tr id='total-charges'>" +
      "<td  style='color: black;'>Total Charges</td>" +
      "<td  style='color: black;'> Rs: " +
      formatNumber(grand_total) +
      "</td>" +
      "</tr>"
  );
  // $("#service").append("<h4 style='color: black;'id='service-charges'> Service Charges: Rs " + service_charges + "</h4>")
  // $("#total").append("<h4 style='color: black;' id='total-charges'> Total Charges: Rs " + grand_total + "</h4>")
}

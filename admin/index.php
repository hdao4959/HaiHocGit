
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dự án mẫu </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            *{
  box-sizing: border-box;
  font-family: sans-serif;
  font-size: 1vw;
}
.boxcenter {
  width: 70%;
  margin: 0 auto;
}
.row {
  float: left;
  width: 100%;
}
.margin_bottom {
  margin-bottom: 20px;
}
.mb10{
  margin-bottom: 10px;
}
.margin_right {
  margin-right: 2%;
}
.demo {
  background-color: antiquewhite;
  min-height: 100px;
}
header {
  background-color: rgb(135, 242, 206);
  border: 1px #090 solid;
  font-size: 2vw;
  color: blue;
  border-radius: 5px;
}
header h1 {
  margin: 20px;
  font-size: 2vw;
}

/*menu*/
.menu {
  display: flex;
  flex-direction: row;
  align-items: center;
  height: 40px;
  background-color: black;
  color: white;
  border-radius: 5px;
}
.menu ul {
  height: 30px;
  line-height: 30px;
  list-style: none;
  display: flex;
}
.menu ul li a {
  padding: 0px 15px;
  text-decoration: none;
  color: white;
}
.menu ul li:hover{
  transform: scale(1.2);
  transform-origin: center;
  transition: 0.3s;
}
.menu ul li a:hover{
    color: rgb(94, 219, 219);
}


.boxLeft {
  float: left;
  width: 74%;
}
p {
  color: red;
}
.boxRight {
  float: left;
  width: 24%;
}
.footer {
  background-color: aquamarine;
  border: 1px #090 solid;
  font-size: 0.8vw;
  color: blue;
  border-radius: 5px;
  padding: 10px;
}
.box_title {
  padding: 10px;
  color: #333;
  background-color: #eee;
  border-top: 1px #ccc solid;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  border-left: 1px #ccc solid;
  border-right: 1px #ccc solid;
  border-bottom: 1px #ccc solid;
}
.box_content {
  border-left: 1px #ccc solid;
  border-right: 1px #ccc solid;
  border-bottom: 1px #ccc solid;
  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5px;
  min-height: 100px;
  padding: 20px;
}
.formtaikhoan{
  line-height: 150%;
}
.formtaikhoan input[type="text"],
.formtaikhoan input[type="password"],
.frmcontent input[type="text"]{
  width: 100%;
  border: 1px #ccc solid;
  padding: 5px;
  border-radius: 5px;
}
.formtaikhoan input[type="checkbox"]{
  border-radius: 5px;
}
.formtaikhoan input[type="submit"],
.frmcontent input[type="submit"],
.frmcontent input[type="reset"],
.frmcontent input[type="button"]{
  border-radius: 5px;
  padding: 5px 10px;
  background-color: white;
  border: 1px #ccc solid;
}
.formtaikhoan input[type="submit"]:hover,
.frmcontent input[type="submit"]:hover,
.frmcontent input[type="reset"]:hover,
.frmcontent input[type="button"]:hover{
  background-color: #ccc;
}
.formtaikhoan li a {
  color: teal;
  text-decoration: none;
}
.formtaikhoan li a:hover {
 color: rgb(65, 173, 173);
}
.box_content2 {
  border-left: 1px #ccc solid;
  border-right: 1px #ccc solid;
  background-color: #eee;
}

.box_footer {
  padding: 10px;
  background-color: #eee;
  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5px;
  border-left: 1px #ccc solid;
  border-right: 1px #ccc solid;
  border-bottom: 1px #ccc solid;
}
.banner {
  text-align: center;
  box-sizing: border-box;
}
.banner img {
  height: 200px;
  width: 100%;
}
.product {
  display: flex;
  flex-direction: row;
  justify-content: space-around;
  flex-wrap: wrap;
}
.boxsp {
  overflow: hidden;
  display: flex;
  flex-direction: column;
  align-items: center;
  float: left;
  width: 32%;
  border: 1px black solid;
  border-radius: 5px;
  color: white;
  margin-top: 20px;
}
.boxsp h3{
  color: black;
}
.boxRight .row {
  margin-bottom: 5px;
}

.menudoc ul{
  margin: 0;
  padding: 0;
  list-style-type: none;
}
.menudoc ul li{
  padding: 10px 20px;
  background-color: rgb(255, 255, 255);
  border-bottom: 1px #ccc solid;
}
.menudoc ul li a{
  color: #666;
  text-decoration: none;
}
.menudoc ul li:hover{
 background-color: #ccc;
}
.searbox input[type="text"]{
  width: 100%;
  padding: 5px 10px ;
  background-color: #fff;
  border:1px #ccc solid;
  border-radius: 5px ;
}
.top10 img{
  width: 20%;
  height: 50px;
  float: left;
  margin-right: 10px;
  border-radius: 5px;
  border: 1px #ccc solid;
}
.top10 a{
  color: #666;
  text-decoration: none;
}
.top10 a:hover{
  color: #000;
  text-decoration: underline;
}



/*
Admin
*/
.headerAdmin h1{
  font-size: 2vw;
}
.headerAdmin{
  background-color: #eee;
  border: 1px #ccc solid;
  color: #666;
  border-radius: 5px;
  padding: 0 20px;
}
.frmtitle{
  background-color: #eee;
  border: 1px #ccc solid;
  color: #666;
  border-radius: 5px;
  padding: 0 20px;
}
.frmcontent{
  padding: 20px 0;

}

/*danhsach_loaihang*/
table{
  width: 100%;
  border-collapse: collapse;
}

table th:nth-child(1){
  width: 10%;
  background-color: #ccc;
}
table th:nth-child(2){
  width: 30%;
  background-color: #ccc;
}
table th:nth-child(3){
  width: 40%;
  background-color: #ccc;
}
table th:nth-child(4){
  width: 20%;
  background-color: #ccc;
}
table td{
  padding: 10px 20px;
  border: 1px #ccc  solid;
}
        </style>
    </head>
    <body>
    <div class="boxcenter">
        <div class="row margin_bottom">
            <header><h1>Trang admin</h1></header>
        </div>
        <div class="row margin_bottom menu" >
            <ul>
                <li><a href="#">Trang chủ</a></li>
                <li><a href="danhsach_loaihang.html">Danh mục</a></li>
                <li><a href="#">Hàng hóa</a></li>
                <li><a href="#">Khách hàng</a></li>
                <li><a href="#">Thống kê</a></li>
                
            </ul>
        </div>
       <div class="row">
        <div class="row headerAdmin frmtitle"><h1>Thêm mới loại hàng hóa</h1></div>
        <div class="row frmcontent">
            <form action="" method="post">
                <div class="row mb10">
                    Mã loại <br>
                    <input type="text" name="maloai" id="" disabled>
                </div>
                <div class="row mb10" >
                    Tên loại <br>
                    <input type="text" name="tenloai" id="" >
                </div>
                <div class="row mb10">
                    <input type="submit" value="Thêm mới">
                    <input type="reset" value="Nhập lại">
                   <a href="danhsach_loaihang.html"> <input type="button" value="Danh sách"></a>
                </div>
            </form>
        </div>
       </div>
      
    </div>
    </body>
</html>
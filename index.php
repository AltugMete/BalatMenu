<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="main.css" />
      <link rel="stylesheet" href="custom.css" />
   </head>
   <body>
      <div class="container">
            <div class="d-flex justify-content-center">
                <img src="https://balatmeze.com/public/storage/settings/March2022/ybdWhcZnmn8Daes9rTs4.jpeg"  style="height:200px"/>
            </div>

            <div class="d-flex justify-content-center">
                <img src="back.png" style="display:none" id="backBtn" onclick="back()" />
            </div>

            <ul style="list-style: none; margin-top:50px; align-items:center" id="menuList">
                <li onclick="showCold()">
                    <img src="https://balatmeze.com/public/storage/titles/April2022/RGDntwXaqqq4e7pgMLbt.jpg">
                    <p class="d-flex justify-content-center">Soguk Mezeler</p>
                </li>
                <li onclick="showHot()">
                    <img src="https://balatmeze.com/public/storage/titles/April2022/si6VrLm4n2Ki3zppWGs8.jpg">
                    <p class="d-flex justify-content-center">Sicak Mezeler</p>
                </li>
                <li onclick="showSweet()">
                    <img src="https://balatmeze.com/public/storage/titles/April2022/feYCNdpIR5dv2kfIsEpb.jpg">
                    <p class="d-flex justify-content-center">Tatlilar</p>
                </li>
                <li onclick="showSalat()">
                    <img src="https://balatmeze.com/public/storage/titles/April2022/xgtKLgRKwEGOcI2eN5wF.jpg">
                    <p class="d-flex justify-content-center">Salatalar</p>
                </li>
            </ul>

            <div class="menu" id="coldMenu" style="display:none">
                <h2 class="menu-group-heading">Soguk Mezeler</h2>
                <div class="menu-group">
                    <div class="menu-item">
                        <img src="https://balatmeze.com/public/storage/food-menus/March2022/jhkFyqdpRYKYws5iLC8Z.jpg" class="menu-item-img">
                        <div class="menu-item-text">
                        <h3 class="menu-item-heading">
                            <span class="menu-item-name">Tirokafteri</span>
                            <span class="menu-item-price">125 TL</span>
                        </h3>
                        <p class="menu-item-desc">Yoğurt ve taze baharatlı peynir ezmesi</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <img src="https://balatmeze.com/public/storage/food-menus/June2022/m1HKRNZYPMH4KX7Fzwo7.jpg" class="menu-item-img">
                        <div class="menu-item-text">
                        <h3 class="menu-item-heading">
                            <span class="menu-item-name">Yaz Kızartması</span>
                            <span class="menu-item-price">100 TL</span>
                        </h3>
                        <p class="menu-item-desc">Kızartma patlıcan, biber ve kabak. Sarımsaklı domates sos ve yoğurt ile</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <img src="https://balatmeze.com/public/storage/food-menus/March2022/E2zlSOm5cKhY6sd5BXZL.jpg" class="menu-item-img">
                        <div class="menu-item-text">
                        <h3 class="menu-item-heading">
                            <span class="menu-item-name">Cercerun</span>
                            <span class="menu-item-price">180 TL</span>
                        </h3>
                        <p class="menu-item-desc">Antakya tuzlu yoğurt ve kızarmış soğan</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="menu" id="hotMenu" style="display:none">
                <h2 class="menu-group-heading">Sicak Mezeler</h2>
                <div class="menu-group">
                    <div class="menu-item">
                        <img src="https://balatmeze.com/public/storage/food-menus/March2022/G75keZPMS0NtrpJBkjcQ.jpg" class="menu-item-img">
                        <div class="menu-item-text">
                        <h3 class="menu-item-heading">
                            <span class="menu-item-name">Kuzu Ciğeri
</span>
                            <span class="menu-item-price">255 TL</span>
                        </h3>
                        <p class="menu-item-desc">Tereyağı, kırmızı soğan, sarımsak ve dereotu ile sotelenmiş yaprak ciğer, kibrit patates ile

</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <img src="https://balatmeze.com/public/storage/food-menus/March2022/Zy0Y9yjIfnnsSBwVME6H.jpg" class="menu-item-img">
                        <div class="menu-item-text">
                        <h3 class="menu-item-heading">
                            <span class="menu-item-name">Kokoreç</span>
                            <span class="menu-item-price">270 TL</span>
                        </h3>
                        <p class="menu-item-desc">İstanbul usulü Kokoreç, taze pişmiş baget ekmeği ve turşu ile

</p>
                        </div>
                    </div>
                   
                    <div class="menu-item">
                        <img src="https://balatmeze.com/public/storage/food-menus/March2022/E2zlSOm5cKhY6sd5BXZL.jpg" class="menu-item-img">
                        <div class="menu-item-text">
                        <h3 class="menu-item-heading">
                            <span class="menu-item-name">Dil Izgara
                            </span>
                            <span class="menu-item-price">370 TL</span>
                        </h3>
                        <p class="menu-item-desc">Acı sos, baharatlı turşu ve zeytin</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="menu" id="salatMenu" style="display:none">
                <h2 class="menu-group-heading">Salatalar</h2>
                <div class="menu-group">
                    <div class="menu-item">
                        <img src="https://dummyimage.com/600x400/000/fff" alt="Black Placeholder Image" class="menu-item-img">
                        <div class="menu-item-text">
                        <h3 class="menu-item-heading">
                            <span class="menu-item-name">Bruschetta</span>
                            <span class="menu-item-price">$12.90</span>
                        </h3>
                        <p class="menu-item-desc">
                            Nunc efficitur felis vel mi efficitur, sed molestie sem
                            scelerisque. Fusce orci risus, congue eu mauris nec, pretium
                            tincidunt nulla.
                        </p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <img src="https://dummyimage.com/600x400/ccc/fff" alt="Black Placeholder Image" class="menu-item-img">
                        <div class="menu-item-text">
                        <h3 class="menu-item-heading">
                            <span class="menu-item-name">Bruschetta</span>
                            <span class="menu-item-price">$12.90</span>
                        </h3>
                        <p class="menu-item-desc">
                            Nunc efficitur felis vel mi efficitur, sed molestie sem
                            scelerisque. Fusce orci risus, congue eu mauris nec, pretium
                            tincidunt nulla.
                        </p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <img src="https://dummyimage.com/600x400/000/fff" alt="Black Placeholder Image" class="menu-item-img">
                        <div class="menu-item-text">
                        <h3 class="menu-item-heading">
                            <span class="menu-item-name">Bruschetta</span>
                            <span class="menu-item-price">$12.90</span>
                        </h3>
                        <p class="menu-item-desc">
                            Nunc efficitur felis vel mi efficitur, sed molestie sem
                            scelerisque. Fusce orci risus, congue eu mauris nec, pretium
                            tincidunt nulla.
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
            
            
        <script type="text/javascript">

        function back() {
            $("#backBtn").hide();
            $("#menuList").show();
            $("#coldMenu").hide();
            $("#hotMenu").hide();
            $("#sweetMenu").hide();
            $("#salatMenu").hide();
        }

        function showCold() {
            $("#menuList").hide();
            $("#coldMenu").show();
            $("#backBtn").show();
         }
         
         function showHot() {
            $("#menuList").hide();
            $("#hotMenu").show();
            $("#backBtn").show();
         }

         function showSweet() {
            $("#menuList").hide();
            $("#sweetMenu").show();
            $("#backBtn").show();
         }

         function showSalat() {
            $("#menuList").hide();
            $("#salatMenu").show();
            $("#backBtn").show();
         }
      </script>
      <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
   </body>
</html>
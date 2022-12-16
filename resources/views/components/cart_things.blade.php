<section class="cart_section">
    <div class="hall_cart">
        <a class="remove_buttons" href="#">Remove all</a>
        <div class="rows" id="1">
            <div  class="first_half">
                <div onclick="toggleClass('se')">
                    <i id = "se" class="bi bi-heart"></i>
                </div>
                <div class="cart_img">
                    <img src="img/TMOM66291-frontimage.png" alt="">
                </div>
                <div>
                    <h5>
                        Headphones true samsung
                    </h5>
                </div>
            </div>
            <div class="price">
                <h5>100$</h5>
                <a class = "remove_buttons" href="#">Remove</a>
            </div>

        </div>
        <div class="rows" id="2">
            <div  class="first_half">
                <div onclick="toggleClass('ae')">
                    <i id = "ae" class="bi bi-heart"></i>
                </div>
                <div class="cart_img">
                    <img src="img/hero__gnfk5g59t0qe_xlarge.png" alt="">
                </div>
                <div>
                    <h5>
                        Air pods Max
                    </h5>
                </div>
            </div>
            <div class="price">
                <h5>200$</h5>
                <a class = "remove_buttons" href="#">Remove</a>
            </div>
        </div>
        <div class="rows" id="3">
            <div  class="first_half">
                <div onclick="toggleClass('ip')">
                    <i id = "ip" class="bi bi-heart"></i>
                </div>
                <div class="cart_img">
                    <img src="img/111.png" alt="">
                </div>
                <div>
                    <h5>
                        Iphone 14 Pro Max
                    </h5>
                </div>
            </div>
            <div class="price">
                <h5>300$</h5>
                <a class = "remove_buttons" href="#">Remove</a>
            </div>
        </div>
        <div class="rows" id="4">
            <div  class="first_half">
                <div onclick="toggleClass('si')">
                    <i id = "si" class="bi bi-heart"></i>
                </div>
                <div class="cart_img">
                    <img src="img/222222.png" alt="">
                </div>
                <div>
                    <h5>
                        GalaxyZ Flip4 5G
                    </h5>
                </div>
            </div>
            <div class="price">
                <h5>400$</h5>
                <a class = "remove_buttons" href="#">Remove</a>
            </div>
        </div>
        <div class="rows" id="5">
            <div  class="first_half">
                <div onclick="toggleClass('aw')">
                    <i id ="aw" class="bi bi-heart"></i>
                </div>
                <div class="cart_img">
                    <img src="img/35b9d235c810623b5ddf2e1411fa377e 1.png" alt="">
                </div>
                <div>
                    <h5>
                        Apple watch 8 series
                    </h5>
                </div>
            </div>
            <div class="price">
                <h5>500$</h5>
                <a class = "remove_buttons" href="#">Remove</a>
            </div>
        </div>
        <div class="rows" id="6">
            <div  class="first_half">
                <div onclick="toggleClass('sw')">
                    <i id = "sw" class="bi bi-heart"></i>
                </div>
                <div class="cart_img">
                    <img src="img/115-1157174_46mm-galaxy-watch-in-silver-on-left-with%201.png" alt="">
                </div>
                <div>
                    <h5>
                        Galaxy Watch
                    </h5>
                </div>
            </div>
            <div class="price">
                <h5>600$</h5>
                <a class = "remove_buttons" href="#">Remove</a>
            </div>
        </div>
        <div style="margin-bottom: 20px">
            <h5 id = "price">Total: </h5>
        </div>
        <div style = "text-align: right;">
            <a class="btn btn-dark" href="adding_card" role="button">Buy now</a>
        </div>
    </div>
</section>


<script>
    window.onload = function() {
        let raw = localStorage.getItem('data2')
        console.log(raw)
        let lt = JSON.parse(raw)
        console.log(lt)

        let emp= ["1","2","3","4","5","6" ];

        emp.forEach(item => {
            let thing = document.getElementById(item)
            if(lt[item] === true){
                console.log(lt[item])
                thing.style.display = "flex"
            }else{
                console.log(lt[item])
                thing.style.display = "none"
            }
        });
    }
    let something = {

    }

    let price = {
        'se' :100,
        'ae' :200,
        'ip' :300,
        'si' :400,
        'aw' :500,
        'sw' :600,
    }
    let sum = 0
    function toggleClass(key){
        let elem = document.getElementById(key)
        if(!something[key]){
            sum += price[key]
            console.log(sum)
            something[key] = true
            elem.classList.remove("bi-heart")
            elem.classList.add("bi-heart-fill")
        }else {
            sum -= price[key]
            console.log(sum)
            something[key] = false
            elem.classList.add("bi-heart")
            elem.classList.remove("bi-heart-fill")
        }

        var paragraph = document.getElementById("price");

        paragraph.textContent = "Total: " + String(sum) ;


    }

</script>


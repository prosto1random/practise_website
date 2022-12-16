<section class="liked_section">
    <div class="show_liked">
        <div class="card not-visible" id="samsung_ear">

            <div class="img_card slide1">
                <img src="img/TMOM66291-frontimage.png" class="card-img-top" alt="...">
            </div>
            <div style="padding: 0 1rem">
                <div class="card-body d-flex" style="align-items: center; border-top: solid 2px;">
                    <di >
                        <h5 class="card-title">Headphones true samsung</h5>
                    </di>
                    <div onclick="toggleClass('1');">
                        <a href="#" class="btn btn-dark">
                            <i id = "1" class="bi bi-heart"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card not-visible" id="apple_ear" >
            <div class="img_card slide1">
                <img src="img/hero__gnfk5g59t0qe_xlarge.png" class="card-img-top" alt="...">
            </div>
            <div style="padding: 0 1rem">
                <div class="card-body d-flex" style="align-items: center; border-top: solid 2px;">
                    <div >
                        <h5 class="card-title">Air pods Max</h5>
                    </div>
                    <div onclick="toggleClass('2');">
                        <a href="#" class="btn btn-dark">
                            <i id = "2" class="bi bi-heart"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card not-visible" id="iphone">
            <div class="img_card slide2">
                <img src="img/111.png" class="card-img-top" alt="...">
            </div>
            <div style="padding: 0 1rem">
                <div class="card-body d-flex" style="align-items: center; border-top: solid 2px;">
                    <div >
                        <h5 class="card-title">Iphone 14 Pro Max</h5>
                    </div>
                    <div onclick="toggleClass('3');">
                        <a href="#" class="btn btn-dark">
                            <i id="3" class="bi bi-heart"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card not-visible" id ="samsung_phone">
            <div class="img_card slide2">
                <img src="img/222222.png" class="card-img-top" alt="...">
            </div>
            <div style="padding: 0 1rem">
                <div class="card-body d-flex" style="align-items: center; border-top: solid 2px;">
                    <div >
                        <h5 class="card-title">GalaxyZ Flip4 5G</h5>
                    </div>
                    <div onclick="toggleClass('4');">
                        <a href="#" class="btn btn-dark">
                            <i id="4" class="bi bi-heart"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card not-visible" id="apple_watch">
            <div class="img_card slide1">
                <img src="img/35b9d235c810623b5ddf2e1411fa377e 1.png" class="card-img-top" alt="...">
            </div>
            <div style="padding: 0 1rem">
                <div class="card-body d-flex" style="align-items: center; border-top: solid 2px;">
                    <div >
                        <h5 class="card-title">Galaxy Watch</h5>
                    </div>
                    <div onclick="toggleClass('5');">
                        <a href="#" class="btn btn-dark">
                            <i id ="5" class="bi bi-heart"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card not-visible" id="samsung_watch">
            <div class="img_card slide2">
                <img src="img/115-1157174_46mm-galaxy-watch-in-silver-on-left-with 1.png" class="card-img-top" alt="...">
            </div>
            <div style="padding: 0 1rem;">
                <div class="card-body d-flex" style="align-items: center; border-top: solid 2px;">
                    <div>
                        <h5 class="card-title">Apple Watch</h5>
                    </div>
                    <div onclick="toggleClass('6');">
                        <a href="#" class="btn btn-dark">
                            <i id = "6" class="bi bi-heart"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="the_button">
            <a href="cart" class="btn btn-secondary">
                Go to Cart
            </a>
        </div>
    </div>

</section>

<script>

    window.onload = function() {
        let raw = localStorage.getItem('data')
        console.log(raw)
        let lt = JSON.parse(raw)
        console.log(lt)

        let emp= ["samsung_ear","apple_ear","iphone", "samsung_phone", "apple_watch", "samsung_watch" ];

        emp.forEach(item => {
            let thing = document.getElementById(item)
            if(lt[item] === true){
                console.log(lt[item])
                thing.style.display = "inline-block"
            }else{
                console.log(lt[item])
                thing.style.display = "none"
            }
        });
    }



    let cart = {

    }

    function toggleClass(key){
        let elem = document.getElementById(key)
        if(!cart[key]){
            cart[key] = true
            elem.classList.remove("bi-heart")
            elem.classList.add("bi-heart-fill")
        }else {
            cart[key] = false
            elem.classList.add("bi-heart")
            elem.classList.remove("bi-heart-fill")
        }
        localStorage.setItem('data2', JSON.stringify(cart))
    }
</script>






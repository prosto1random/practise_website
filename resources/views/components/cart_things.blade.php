<section class="cart_section">
    <div class="hall_cart">
        <a class="remove_buttons" href="#">Remove all</a>
        <div class="rows">
            <div class = "svg_icons"  style="align-self: center;" onclick="toggleClass();">
                <svg style = "position: absolute"  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                </svg>
                <svg  id = "watch_galaxy" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill not-visible" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                </svg>
            </div>
            <div class="cart_img">
                <img src="img/115-1157174_46mm-galaxy-watch-in-silver-on-left-with%201.png" alt="">
            </div>
            <div>
                <h5>
                Apple watch 8 series
                </h5>
                <p>
                    Silver
                </p>
            </div>
            <div style="align-self:">
                <h5>385$</h5>
                <a class = "remove_buttons" href="#">Remove</a>
            </div>
        </div>
        <div class="rows">

        </div>
        <div class="rows">

        </div>
    </div>
</section>

<script>
    var elem = document.getElementById("watch_galaxy");

    function toggleClass(){
        elem.classList.toggle("not-visible");
        elem.classList.toggle("visible");
    }

</script>

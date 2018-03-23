<template lang="html">
    <div class="news-show">
        <div class="w3-padding-32 mySlides-container w3-text-white text-center" v-if="loading" style="padding: 128px 0!important;">
            <i class="fa fa-spinner fa-3x fa-spin"></i>
        </div>
        <div class="w3-padding-32 mySlides-container" v-else>
            <div class="numbertext">Showing <span id="current-image-number">1 / {{ news.length }}</span></div>
            <div class="mySlides image-animate" v-for="(info, index) in news" :class="index == 0 ? '' : 'hide'">
                <div class="col-sm-7">
                    <div style="height: 500px;" v-if="info.type == 'image'">
                        <img :src="info.attachment" style="width: 100%; height: 500px;" draggable="false">
                    </div>
                    <div style="height: 500px;" v-else>
                        <iframe :src="info.attachment" style="width: 100%; height: 500px;" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-sm-5 textheight">
                    <div class="text-center w3-text-white w3-padding-16">
                        <div>
                            {{ info.description }}
                        </div>
                    </div>
                </div>
            </div>
            <a class="prev" v-on:click="plusSlides(-1)">&#10094;</a>
            <a class="next" v-on:click="plusSlides(1)">&#10095;</a>
            <div class="col-sm-12 w3-padding-16" style="text-align:center">
                    <span v-for="(i, m) in news" class="dot" v-on:click="currentSlide(m)" :class="m == 0 ? 'active' : ''"></span>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                loading: true,
                news: '',
                slideIndex: 1
            }
        },
        methods: {
            plusSlides: function(n) {
                this.showSlides(this.slideIndex += n);
            },
            currentSlide: function(n) {
                n++;
                this.showSlides(this.slideIndex = n);
            },
            showSlides: function(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                if (n > slides.length) {this.slideIndex = 1}
                if (n < 1) {this.slideIndex = slides.length}
                for (i = 0; i < slides.length; i++) {
                    slides[i].className = "mySlides";
                    slides[i].className += " hide";
                }
                var SI = this.slideIndex;
                $('#current-image-number').html(this.slideIndex + " / " + document.getElementsByClassName("mySlides").length);
                try {
                    slides[SI-2].className = "mySlides animate_hide";
                    $(".textheight").hide();
                    setTimeout(function() {
                        slides[SI-2].className = "mySlides hide";
                        $(".textheight").slideDown('medium');
                    }, 2010);
                } catch (e) {
                    slides[slides.length-1].className = "mySlides animate_hide";
                    $(".textheight").hide();
                    setTimeout(function() {
                        slides[slides.length-1].className = "mySlides hide";
                        $(".textheight").slideDown('medium');
                    }, 2010);
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[SI-1].className = "mySlides image-animate";
                dots[SI-1].className += " active";
            }
        },
        mounted() {
            var vm = this;
            axios.post('/news/getAll').then(function(response) {
                vm.news = _.orderBy(response.data, 'id', 'desc');
                vm.loading = false;
            });
        }
    }
</script>

<style>
/* ===================================
   VIDEO REELS
=================================== */
.ratio video {
    transition: transform 0.4s ease, box-shadow 0.4s ease;
}
/* hover reels */
.ratio:hover video {
    transform: scale(1.03);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
}
</style>

<!-- VIDEO PROFILE & REELS -->
    <div class="pt-5 pb-5">
    <!-- VIDEO YOUTUBE -->
        <div style="max-width:800px; margin:auto;" data-aos="zoom-in">
            <div class="ratio ratio-16x9" style="border-radius:20px; overflow:hidden; box-shadow:0 15px 35px rgba(0,0,0,0.1);">
                <iframe
                    width="560" height="315"
                    src="https://www.youtube.com/embed/0Lp6Q5nnNoE?si=SnUn729mIYdkpOYt"
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen>
                </iframe>
            </div>
        </div>

    <!-- REELS -->
        <div class="container mt-5">
            <h5 class="text-center fw-bold mb-4" data-aos="fade-up">Reels</h5>
                <div class="row justify-content-center g-4">
                <!-- REEL 1 -->
                    <div class="col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="ratio" style="aspect-ratio:9/16; border-radius:16px; overflow:hidden; box-shadow:0 10px 25px rgba(0,0,0,0.1);">
                            <video controls style="object-fit:cover;">
                                <source src="/img/video/video_Eresa1.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>

                    <!-- REEL 2 -->
                    <div class="col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="ratio" style="aspect-ratio:9/16; border-radius:16px; overflow:hidden; box-shadow:0 10px 25px rgba(0,0,0,0.1);">
                            <video controls style="object-fit:cover;">
                                <source src="/img/video/video_Eresa3.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>

                    <!-- REEL 3 -->
                    <div class="col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <div class="ratio" style="aspect-ratio:9/16; border-radius:16px; overflow:hidden; box-shadow:0 10px 25px rgba(0,0,0,0.1);">
                            <video controls style="object-fit:cover;">
                                <source src="/img/video/video_Eresa2.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
        </div>    
    </div>

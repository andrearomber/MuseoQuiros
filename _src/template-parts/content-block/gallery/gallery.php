<?php /* Component arguments */
$title = get_arg($args, 'title');
$gallery = get_arg($args,'gallery'); 
$aspect = get_arg($args,'aspect');
$cols = get_arg($args,'cols'); ?>

<?php if ($gallery) : ?>
    <section class="content-section section-gallery">
        <div class="container">
        <?php if ($title) : ?>
            <div class="section-header">
                <h3><?php echo $title; ?></h3>
            </div>
        <?php endif; ?>

            <div class="acf-gallery <?php echo $cols; ?>">
                <?php foreach($gallery as $image) : ?>
                    <div class="gallery-item <?php echo $aspect; ?>">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="gallery-image">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    
    <!-- Modal container -->
    <div id="imageModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="modalImage">
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // console.log("Hola caracola");
            
            const modal = document.getElementById('imageModal');
            const modalImg = document.getElementById('modalImage');
            const closeBtn = document.querySelector('.close');
            const galleryImages = document.querySelectorAll('.gallery-image');
            const contentSection = document.querySelector('.content-section');

            galleryImages.forEach(image => {
                image.addEventListener('click', function() {
                    modal.style.display = 'flex';
                    modalImg.src = this.src;
                    document.body.classList.add('modal-active'); // Add blur
                });
            });

            closeBtn.addEventListener('click', function() {
                modal.style.display = 'none';
                document.body.classList.remove('modal-active'); // Remove blur
            });

            // Close the modal when clicking outside the image
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    modal.style.display = 'none';
                    document.body.classList.remove('modal-active');
                }
            });
        });

    </script>
<?php endif; ?>
<div class="row p-5">
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-4 mt-3 ">
        <div class="card " style="width: 18rem;">
            <img class="card-img-top" src="https://image.tmdb.org/t/p/w220_and_h330_face/<?php echo e($movie->poster_path); ?>" alt="Card image cap">
            <img class="card-img-top"  style="width: 60px; height: 60px; object-fit: cover; position: absolute; top: 1%; right: 1%;    box-shadow: 0 0 9px 0px #000;border-radius: 100%" src="https://image.tmdb.org/t/p/w220_and_h330_face/<?php echo e($movie->backdrop_path); ?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title "  style="font-weight:bold "><?php echo e($movie->title); ?> </h5>
                <p class="card-text"><?php echo e(Str::limit($movie->overview,50)); ?>.</p>
                <a href="/movie/<?php echo e($movie->id); ?> " class="btn btn-primary mt-3">Details</a>
            </div>
        </div>
        </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php echo e($data->links()); ?>

</div>
<?php /**PATH /home/samih/public_html/example-app/resources/views/livewire/movie.blade.php ENDPATH**/ ?>
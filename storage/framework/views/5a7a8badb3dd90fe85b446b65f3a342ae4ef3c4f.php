<div class="bg-white py-5 dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg row"
     style='   background:  linear-gradient(to top,rgb(0 0 0), rgb(4 33 59 / 79%)), url("https://www.themoviedb.org/t/p/w600_and_h900_bestv2/<?php echo e($data->backdrop_path); ?>")
;background-size: cover  '>
    <div class="col-4">
        <img  style="border-radius: 20px" src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/<?php echo e($data->poster_path); ?>"/>
    </div>
    <div class="col-8">
        <h2 style="    font-size: 30px;  font-weight: bold;  color: white;  margin-bottom: 20px; ">
            <?php echo e($data->title); ?>

        </h2>
            <p style="    font-size: 16px;  font-weight: bold;      color: #bcbcbc;  margin-bottom: 20px; ">
                <?php echo e($data->overview); ?>

            </p>
        <div style="width: 100%" class="row">
            <p style="    font-size: 16px;  font-weight: bold;      color: #bcbcbc;  margin-bottom: 20px; ">

           <span style="float:left; margin-right: 10px">
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
            </svg>
           </span>
                <span  style="float:left; margin-right: 10px"><?php echo e($data->release_date); ?></span>
            </p>
            <p style="    font-size: 16px;  font-weight: bold;      color: #bcbcbc;  margin-bottom: 20px; ">

           <span style="float:left; margin-right: 10px">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
</svg>           </span>
                <span  style="float:left; margin-right: 10px"><?php echo e($data->vote_average); ?></span>
            </p>
        </div>
        <p style="     font-weight: bold;      color: #bcbcbc;  margin-bottom: 20px; ">
            <?php $__currentLoopData = $data->genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <span class="badge badge-warning" style="background: #940000"><?php echo e($genre->name); ?></span>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </p>
        <p style="    font-size: 16px;  font-weight: bold;      color: #bcbcbc;  margin-bottom: 20px; ">
            <a  target="_blank" href="<?php echo e($data->homepage); ?>" style="background: #050f2d" class="btn btn-primary"> See  the website </a>
        </p>
        <form method="post" action="/movie/destroy/<?php echo e($data->id); ?>">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />

            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Edit
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit <?php echo e($data->title); ?></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="post" action="/movie/edit/<?php echo e($data->id); ?>">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                    <div class="modal-body">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Title</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo e($data->title); ?>" name="title">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="overview"><?php echo e($data->overview); ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">status</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="status" value="<?php echo e($data->status); ?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Release_date</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="release_date" value="<?php echo e($data->release_date); ?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">runtime</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="runtime" value="<?php echo e($data->runtime); ?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">homepage</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="homepage" value="<?php echo e($data->homepage); ?>">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"  style="color: #050f2d" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary" type="submit" style="color: #050f2d">Save changes</button>
                    </div>
                    </form>

                </div>
            </div>
        </div>

    </div>


</div>
<?php /**PATH /home/samih/public_html/example-app/resources/views/livewire/moviedetail.blade.php ENDPATH**/ ?>
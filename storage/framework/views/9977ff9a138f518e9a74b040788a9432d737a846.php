<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 

     <?php $__env->endSlot(); ?>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('moviedetail', ['id' => $id])->html();
} elseif ($_instance->childHasBeenRendered('NkTvzo1')) {
    $componentId = $_instance->getRenderedChildComponentId('NkTvzo1');
    $componentTag = $_instance->getRenderedChildComponentTagName('NkTvzo1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('NkTvzo1');
} else {
    $response = \Livewire\Livewire::mount('moviedetail', ['id' => $id]);
    $html = $response->html();
    $_instance->logRenderedChild('NkTvzo1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
         </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH /home/samih/public_html/example-app/resources/views/movie-detail.blade.php ENDPATH**/ ?>
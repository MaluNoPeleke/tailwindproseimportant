<div class="prose">
<figure class="!my-0">
  <a >
  ​  <picture>
    <!-- <source srcset="<?= $image->thumb(['width'   => 512, 'quality' => 48, 'format' => 'avif'])->url() ?> 512w, <?= $image->thumb(['width'   => 1024, 'quality' => 48, 'format' => 'avif'])->url() ?> 1024w, <?= $image->thumb(['width'   => 1536, 'quality' => 48, 'format' => 'avif'])->url() ?> 1536w, <?= $image->thumb(['width'   => 2048, 'quality' => 48, 'format' => 'avif'])->url() ?> 2048w" sizes="(max-width: 767px) calc(0.8 * 100vw), calc(0.61 * 100vw)" type="image/avif"> -->
    <source srcset="<?= $image->thumb(['width'   => 512, 'quality' => 55, 'format' => 'webp'])->url() ?> 512w, <?= $image->thumb(['width'   => 1024, 'quality' => 55, 'format' => 'webp'])->url() ?> 1024w, <?= $image->thumb(['width'   => 1536, 'quality' => 55, 'format' => 'webp'])->url() ?> 1536w, <?= $image->thumb(['width'   => 2048, 'quality' => 55, 'format' => 'webp'])->url() ?> 2048w" sizes="(max-width: 767px) calc(0.8 * 100vw), calc(0.61 * 100vw)" type="image/webp">
    <img src="https://images.pexels.com/photos/6560708/pexels-photo-6560708.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" height="<?= $h ?>" width="<?= $w ?>" alt="<?= $alt ?>" class="my-0"  style="margin-top: 0;" srcset="<?= $image->thumb(['width'   => 512, 'quality' => 50])->url() ?> 512w, <?= $image->thumb(['width'   => 1024, 'quality' => 50])->url() ?> 1024w, <?= $image->thumb(['width'   => 1536, 'quality' => 50])->url() ?> 1536w, <?= $image->thumb(['width'   => 2048, 'quality' => 50])->url() ?> 2048w" decoding="async" loading="lazy" style="background-size: cover; background-image: url('data:image/svg+xml;charset=utf-8,%3Csvg xmlns=\'http%3A//www.w3.org/2000/svg\' xmlns%3Axlink=\'http%3A//www.w3.org/1999/xlink\' viewBox=\'0 0 1280 853\'%3E%3Cfilter id=\'b\' color-interpolation-filters=\'sRGB\'%3E%3CfeGaussianBlur stdDeviation=\'.5\'%3E%3C/feGaussianBlur%3E%3CfeComponentTransfer%3E%3CfeFuncA type=\'discrete\' tableValues=\'1 1\'%3E%3C/feFuncA%3E%3C/feComponentTransfer%3E%3C/filter%3E%3Cimage filter=\'url(%23b)\' x=\'0\' y=\'0\' height=\'100%25\' width=\'100%25\' xlink%3Ahref=\'data%3Aimage/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAAGCAIAAACepSOSAAAACXBIWXMAAC4jAAAuIwF4pT92AAAAs0lEQVQI1wGoAFf/AImSoJSer5yjs52ktp2luJuluKOpuJefsoCNowB+kKaOm66grL+krsCnsMGrt8m1u8mzt8OVoLIAhJqzjZ2tnLLLnLHJp7fNmpyjqbPCqLrRjqO7AIeUn5ultaWtt56msaSnroZyY4mBgLq7wY6TmwCRfk2Pf1uzm2WulV+xmV6rmGyQfFm3nWSBcEIAfm46jX1FkH5Djn5AmodGo49MopBLlIRBfG8yj/dfjF5frTUAAAAASUVORK5CYII=\'%3E%3C/image%3E%3C/svg%3E'); ">
    </picture>
  </a>

  <figcaption class="img-caption text-center">
    This is a caption text and the figure still has top and bottom margin!
  </figcaption>
</figure>
</div>

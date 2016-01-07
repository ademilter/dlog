# Dlog
simple blog theme - only frontend codes

- [Home](http://adem.social/dlog/)
- Post
  - [Photo](http://adem.social/dlog/?page=post-photo)
  - [Video](http://adem.social/dlog/?page=post-video)
  - [Code](http://adem.social/dlog/?page=post-code)
  - [Typography](http://adem.social/dlog/?page=post-typography)


### Figures

##### Typography - quote
```html
<section class="width width--outer">

  <figure class="figure important">
    <blockquote>
    Bu hayatta zamanınız sınırlı. O sınırlı zamanı, başkasının yaşamını yaşayarak harcamayın. Başka
    kişilerin düşünceleriyle yaşanan yaşam, dogmaların tuzağına düşmek demektir.
    </blockquote>
  </figure>
  
</section>
```

##### Typography - marked
```html
<section class="width">

  <figure class="figure marked">
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur magnam dolore
      necessitatibus dolorem, maiores dignissimos hic iure possimus in. Error pariatur quo explicabo
      ipsam! Laborum aperiam sapiente autem cupiditate dolorum.
    </p>
  </figure>

</section>
```

##### Video
```html
<section class="width">

  <figure class="figure video">
    <video controls preload="auto">
      <source src="https://video-lalalalal.com/movie.mov" type="video/mp4">
    </video>
    <figcaption>standart width video</figcaption>
  </figure>
  
</section>
```

##### Video - outer - youtube
```html
<section class="width width--outer">

  <figure class="figure video">
    <div class="video_embed">
      <iframe src="https://www.youtube.com/embed/2pL28CcEijU?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
    </div>
    <figcaption>outer width video</figcaption>
  </figure>

</section>
```

##### Video - full - vimeo
```html
<section class="width width--full">

  <figure class="figure video">
    <div class="video_embed">
      <iframe src="https://player.vimeo.com/video/150000988?title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
    <figcaption>full width video</figcaption>
  </figure>

</section>
```


##### Image
```html
<section class="width">

  <figure class="image">
    <img data-action="zoom" src="https://cdn-images-1.medium.com/max/1200/1*d51UjEEcrhEMSmUfFmQQtA.gif" alt=""/>
  </figure>
  
</section>
```


##### Image - Outer width
```html
<section class="width width--outer">

  <figure class="image">
    <img data-action="zoom" src="https://cdn-images-1.medium.com/max/1200/1*d51UjEEcrhEMSmUfFmQQtA.gif" alt=""/>
    <figcaption>outer width figure</figcaption>
  </figure>
  
</section>
```


##### Image - Full width
```html
<section class="width width--full">

  <figure class="image image--full">
    <img data-action="zoom" src="https://cdn-images-1.medium.com/max/1200/1*d51UjEEcrhEMSmUfFmQQtA.gif" alt=""/>
    <figcaption>full width figure</figcaption>
  </figure>
  
</section>
```

##### Image - float - outer & left
```html
<section class="width">

  <figure class="image float float--outer float--right">
    <img data-action="zoom" src="https://cdn-images-1.medium.com/max/400/1*MHM3PyqN98kHZWj0KiihAA.gif" alt=""/>
    <figcaption>float left (outer) figure</figcaption>
  </figure>
  
</section>
```

##### Image - float - right
```html
<section class="width">

  <figure class="image float float--right">
    <img data-action="zoom" src="https://cdn-images-1.medium.com/max/400/1*MHM3PyqN98kHZWj0KiihAA.gif" alt=""/>
    <figcaption>float right figure</figcaption>
  </figure>
  
</section>
```

##### Code
```html
<section class="width">

  <figure class="code">
    <pre>
      <code class="language-css">
        /* css/base.css */
        @import 'basscss';
    
        :root {
          --font-family: 'Avenir Next', 'Hevletica Neue', sans-serif;
        }
      </code>
    </pre>
  </figure>
  
</section>
```


##### Code - Gist embed
```html
<section class="width">

  <figure class="code">
    <script src="https://gist.github.com/arunoda/8558920a9972fa41afa1.js"></script>
    <figcaption>embed github gist</figcaption>
  </figure>
  
</section>
```

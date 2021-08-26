# Fifty-fifty

Available on the landing page and business ecosystem page templates.

```
<figure class="component component--fifty-fifty">
    <div class="illustration">
        <div class="l-frame">
            <img src="/dist/assets/svg/illustration-join.svg" alt role="presentation" />
        </div>
    </div>
    <figcaption>
        <h2 class="txt-earth">The Open Web Platform is Transforming Payments</h2>
        <p>To help ensure that the Web evolves to meet new industry needs, we're convening banks, processors, regulators, card networks, e-commerce companies, telecom operators, multiple service vendors, browser and software vendors and others who are shaping the way Web Payments are developed.</p>
        <div class="l-box l-box--no-border l-box--no-padding">
            <a class="button button--alt" href="path/to/page">An optional link</a>
            <a href="path/to/page">Another optional link</a>
        </div>
    </figcaption>
</figure>
```

## Considerations

Note the use of the [frame layout](../layouts/frame.md) and the [box layout](../layouts/box.md).

An option is available within the CMS to swap the order of the picture and text region. This adds the class `.reversed` to the `<figure>`:

```
<figure class="component component--fifty-fifty reversed">
    <div class="image">
        <div class="l-frame">
            <img src="/dist/assets/images/temp-developers-920.jpg"
                 srcset="/dist/assets/images/temp-developers-360.jpg 360w, /dist/assets/images/temp-developers-580.jpg 580w, /dist/assets/images/temp-developers-920.jpg 920w, /dist/assets/images/temp-developers-700.jpg 700w, /dist/assets/images/temp-developers-1520.jpg 1520w"
                 sizes="(min-width: 48em) 50vw, 100vw"
                 loading="lazy"
                 alt="A Macbook screen with code, as seen from over the developer's shoulder" />
        </div>
    </div>
    <figcaption>
        <h2 class="txt-earth">The Open Web Platform is Transforming Payments</h2>
        <p>To help ensure that the Web evolves to meet new industry needs, we're convening banks, processors, regulators, card networks, e-commerce companies, telecom operators, multiple service vendors, browser and software vendors and others who are shaping the way Web Payments are developed.</p>
        <div class="l-box l-box--no-border l-box--no-padding">
            <a class="button button--alt" href="path/to/page">Here's an optional link</a>
            <a href="path/to/page">A unique and descriptive link</a>
        </div>
    </figcaption>
</figure>
```
# Archived content

## Archive banner

Use the archive banner component to clearly indicate to users that a page they are visiting is an archive version and no longer updated. Place it directly after `<span role="status" aria-live="polite"></span>`, or as the first item inside of `<header>` on pages not using Apollo.

```
<section id="archive-banner">
    <div class="centered">
        <div>
            <div class="archive-banner__message">
                <h2>This page has been archived and is no longer updated</h2>
                <p><a href="/path/to/page">Find out more about W3C's policy on archived content</a></p>
                <h3>Optional heading</h3>
                <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.</p>
            </div>
            <div class="archive-banner__logo">
                <span><svg xmlns="http://www.w3.org/2000/svg" focusable="false" aria-hidden="true" overflow="visible" viewBox="0 0 72 48" width="72px" height="48px"><defs/><g image-rendering="optimizeQuality" shape-rendering="geometricPrecision" text-rendering="geometricPrecision"><path fill="transparent" fill-rule="evenodd" d="M0 0h72v48H0z" clip-rule="evenodd"/><path fill="#221B0A" d="M18.117 8.006l5.759 19.58 5.759-19.58h15.614v1.946L39.37 20.08c2.065.663 3.627 1.868 4.686 3.615 1.059 1.748 1.589 3.799 1.589 6.155 0 2.914-.775 5.363-2.324 7.348s-3.555 2.978-6.017 2.978c-1.854 0-3.469-.589-4.845-1.767-1.377-1.178-2.396-2.773-3.058-4.786l3.256-1.35c.477 1.218 1.106 2.178 1.887 2.879a3.993 3.993 0 002.76 1.052c1.112 0 2.052-.622 2.82-1.866.768-1.245 1.152-2.74 1.152-4.489 0-1.933-.411-3.429-1.231-4.488-.954-1.244-2.45-1.867-4.489-1.867h-1.588v-1.906l5.56-9.612h-6.712l-.382.65-8.163 27.548h-.397l-5.958-19.937-5.957 19.937h-.397L2.032 8.006h4.17l5.759 19.58 3.892-13.185-1.906-6.395h4.17z"/><path fill="#221B0A" d="M66.92 8.006c-.819 0-1.554.295-2.111.861-.591.6-.92 1.376-.92 2.178a3 3 0 00.887 2.128 2.979 2.979 0 002.145.912c.793 0 1.562-.321 2.161-.903.574-.557.887-1.3.887-2.136 0-.811-.321-1.57-.878-2.136a3 3 0 00-2.171-.904zm2.643 3.065c0 .701-.271 1.351-.768 1.832a2.671 2.671 0 01-1.892.777c-.675 0-1.342-.278-1.84-.785s-.777-1.157-.777-1.849.287-1.368.802-1.891a2.54 2.54 0 011.84-.751c.726 0 1.376.271 1.883.785.49.489.752 1.147.752 1.882zm-2.559-1.807h-1.3v3.445h.65V11.24h.642l.701 1.469h.726l-.769-1.57c.498-.102.785-.439.785-.929 0-.625-.472-.946-1.435-.946zm-.118.422c.608 0 .886.169.886.591 0 .405-.278.549-.87.549h-.549v-1.14h.533z" clip-rule="evenodd"/><g><path fill="#221B0A" d="M61.807 7.825l.676 4.107-2.391 4.575s-.918-1.941-2.443-3.015c-1.285-.905-2.122-1.102-3.431-.832-1.681.347-3.587 2.357-4.419 4.835-.995 2.965-1.005 4.4-1.04 5.718-.056 2.113.277 3.362.277 3.362s-1.452-2.686-1.438-6.62c.009-2.808.451-5.354 1.75-7.867 1.143-2.209 2.842-3.535 4.35-3.691 1.559-.161 2.791.59 3.743 1.403 1 .854 2.01 2.721 2.01 2.721l2.356-4.696zM62.102 31.063s-1.057 1.889-1.715 2.617c-.659.728-1.837 2.01-3.292 2.651s-2.218.762-3.656.624c-1.437-.138-2.772-.97-3.24-1.317-.468-.347-1.664-1.369-2.34-2.322-.676-.953-1.733-2.859-1.733-2.859s.589 1.91.958 2.721c.212.467.864 1.894 1.789 3.136.863 1.159 2.539 3.154 5.086 3.604 2.547.451 4.297-.693 4.73-.97.433-.277 1.346-1.042 1.924-1.66.603-.645 1.174-1.468 1.49-1.962.231-.36.607-1.092.607-1.092l-.608-3.171z"/></g></g></svg></span>
            </div>
        </div>
    </div>
</section>
```

## Indicating links to archived content

```
<a href="/path/to/page" class="archived with-icon--before">
    <svg role="img" class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em"><title>Archived content</title><defs/><path aria-hidden="true" d="M504 255.531c.253 136.64-111.18 248.372-247.82 248.468-59.015.042-113.223-20.53-155.822-54.911-11.077-8.94-11.905-25.541-1.839-35.607l11.267-11.267c8.609-8.609 22.353-9.551 31.891-1.984C173.062 425.135 212.781 440 256 440c101.705 0 184-82.311 184-184 0-101.705-82.311-184-184-184-48.814 0-93.149 18.969-126.068 49.932l50.754 50.754c10.08 10.08 2.941 27.314-11.313 27.314H24c-8.837 0-16-7.163-16-16V38.627c0-14.254 17.234-21.393 27.314-11.314l49.372 49.372C129.209 34.136 189.552 8 256 8c136.81 0 247.747 110.78 248 247.531zm-180.912 78.784l9.823-12.63c8.138-10.463 6.253-25.542-4.21-33.679L288 256.349V152c0-13.255-10.745-24-24-24h-16c-13.255 0-24 10.745-24 24v135.651l65.409 50.874c10.463 8.137 25.541 6.253 33.679-4.21z"/></svg> Example of link to archived content
</a>
```
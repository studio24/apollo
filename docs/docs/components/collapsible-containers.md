# Collapsible containers

This is a series of `div` containers, each containing a heading and some content. JavaScript enhances the markup, collapsing all containers and inserting buttons inside the headings to toggle them open/closed. The JavaScript looks for the presence of the data attribute `data-component="collapsibles"` on the outer container and `data-heading="collapsibles"` on the headings.

The collapsible containers component is used within the [group list](group-list.md) component:

```
<div class="component--collapsibles" data-component="collapsibles">
    <div>
        <h3 data-heading="collapsibles">AI KR (Artificial Intelligence Knowledge Representation) <span>Community group</span></h3>
        <div>
            <p>The overall goal/mission of this community group is to explore the requirements, best practices and implementation options for the conceptualization and specification of domain knowledge in AI.</p>
            <a href="path/to/page">Visit the AI KR Community Group</a>
        </div>
    </div>
    <div>
        <h3 data-heading="collapsibles">Web Payment Security <span>Interest group</span></h3>
        <div>
            <p>A brief description of what this group does.</p>
            <a href="path/to/page">Visit the Web Payment Security Interest Group</a>
        </div>
    </div>
    <div>
        <h3 data-heading="collapsibles">Publishing <span>Business group</span></h3>
        <div>
            <p>The Publishing Business Group fosters ongoing participation by members of the publishing industry and overall publishing ecosystem in the development of the Web for publishing, and serves as a conduit for feedback between the publishing ecosystem and W3C.</p>
            <a href="path/to/page">Visit the Publishing Business Group</a>
        </div>
    </div>
    <div>
        <h3 data-heading="collapsibles">Accessibility Education and Outreach Working Group (EOWG) <span>Working group</span></h3>
        <div>
            <p>The mission of the Accessibility Education and Outreach Working Group is to develop strategies and resources to promote awareness, understanding, implementation, and conformance testing for W3C accessibility standards; and to support the accessibility work of other W3C Groups.</p>
            <a href="path/to/page">Visit the Accessibility Education and Outreach Working Group</a>
        </div>
    </div>
</div>
```

## Considerations

[Buttons shouldn't use the pointer cursor](https://adamsilver.io/articles/buttons-shouldnt-have-a-hand-cursor/), so ensure the buttons have sufficient affordance by other visual means, such as background colour, border and/or box-shadow styles.
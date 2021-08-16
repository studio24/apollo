# Group list

Used on the [business ecosystem](../templates/business-ecosystem.md) template. This component makes use of [collapsible containers](collapsible-containers.md).

```
<div class="u-full-width component component--group-list">
    <div class="l-center">
        <div class="component--group-list__intro">
            <h2>Active groups</h2>
            <p>Some introductory text to the listing of active groups that follows.</p>
        </div>
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
    </div>
</div>
```
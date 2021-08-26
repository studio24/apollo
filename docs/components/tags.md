# Tag list

## Simple tags

```
<div class="l-cluster">
    <ul class="clean-list">
        <li>
            <span class="tag">Accessibility</span>
        </li>
        <li>
            <span class="tag">Privacy</span>
        </li>
        <li>
            <span class="tag">Security</span>
        </li>
    </ul>
</div>
```

## Linked tags

```
<div class="l-cluster">
	<ul class="clean-list">
		<li>
			<a href="path/to/page" class="tag"><span class="visuallyhidden">Content tagged with</span> Accessibility</a>
		</li>
		<li>
			<a href="path/to/page" class="tag"><span class="visuallyhidden">Content tagged with</span> Privacy</a>
		</li>
		<li>
			<a href="path/to/page" class="tag"><span class="visuallyhidden">Content tagged with</span> Security</a>
		</li>
	</ul>
</div>
```

## Considerations

Note the use of the [cluster layout](../layouts/cluster.md).

Note the inclusion of visually-hidden text in the linked tags, to provide detail for assistive technology users when browsing out of context.
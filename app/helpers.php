<?php

function image($item, $width = 150, $height = 150)
{
	return $item->isObject()
		? asset('js/vendor/holder.js/' . $width . 'x' . $height . '/social/text:Item')
		: asset('js/vendor/holder.js/' . $width . 'x' . $height . '/industrial/text:Local');
}

function link_back($item)
{
	return $item->hasParent()
		? route('items.show', $item->parent_id)
		: route('items.index');
}

function get_parent_list($item, $i = 0)
{
	if ($i > 1) return '';

	if ($item->hasParent()) {
		$link = route('items.show', $item->parent->id);
		return get_parent_list($item->parent, ++$i) . '<li><a href="' . $link . '">' . $item->parent->name . '</a></li>';
	}

	return '<li><a href="' . route('items.index') . '">Index</a></li>';
}
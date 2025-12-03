---
sidebar_position: 2   
title: unnest
slug: /ace/unnest
tags: []
---

Expands an array or nested structure into multiple rows.

### Syntax

 ```yaml
unnest(<val>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| val | Array | The Val value. |

### Return values
Array


## Usage

Expands order tags array into multiple rows.


```yaml
unnest(orders.tags)
```


### Related functions      
* [json_array_elements](/ace/json_array_elements)
* [str_split](/ace/str_split)
* [generate_series](/ace/generate_series)

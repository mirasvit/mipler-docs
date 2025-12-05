---
sidebar_position: 2   
title: json_array_elements
slug: /ace/json_array_elements
tags: [Text]
---

Expands a JSON array into individual elements.

### Syntax

 ```yaml
json_array_elements(<val>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| val | Text | The Val string value. |

### Return values
Array


## Usage

Expands order tags array into individual rows.


```yaml
json_array_elements(orders.tags)
```


### Related functions      
* [json_path](/ace/json_path)
* [unnest](/ace/unnest)
* [str_split](/ace/str_split)

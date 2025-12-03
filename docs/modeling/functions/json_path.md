---
sidebar_position: 2   
title: json_path
slug: /ace/json_path
tags: [Text]
---

Allows to navigate and retrieve specific data from JSON objects or arrays based on a specified path or query.

### Syntax

 ```yaml
json_path(<val>, <path>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| val | Text | The Val string value. |
| path | Text | The path or location. |

### Return values
Text


## Usage

Extracts the 'name' value from the 'collection' object in product meta fields.


```yaml
json_path(products.meta_fields, "collection.name")
```


Extracts a value from a JSON object using a path expression.


```yaml
json_path(order_items.properties, "#(name=""color"").value")
```


### Related functions      
* [json_array_elements](/ace/json_array_elements)
* [str_contains](/ace/str_contains)
* [str_replace](/ace/str_replace)

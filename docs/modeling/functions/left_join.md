---
sidebar_position: 2   
title: left_join
slug: /ace/left_join
tags: [Table manipulation]
---

Performs a left join between two tables.

### Syntax

 ```yaml
left_join(<leftTable>, <rightTable>, <leftColumn>, <rightColumn>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| leftTable | Table | The Lefttable table. |
| rightTable | Table | The Righttable table. |
| leftColumn | any | The Leftcolumn value. |
| rightColumn | any | The Rightcolumn value. |

### Return values
Table


## Usage

Joins orders with customers table, keeping all orders even if customer data is missing.


```yaml
left_join(orders, customers, orders.customer_id = customers.id)
```


### Related functions      
* [create_relationship](/ace/create_relationship)
* [combine](/ace/combine)
* [union](/ace/union)
* [related](/ace/related)

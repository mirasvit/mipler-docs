---
sidebar_position: 2
title: "Sharing Reports: Always Fresh, Always Accessible"
sidebar_label: Sharing Reports
slug: /api/sharing
---


Every report in **Mipler** comes with a **Share** button that makes it incredibly easy to connect your data wherever you need it.

When you click **Share**, Mipler generates a **direct link** to your report. You can then choose the **format** that best fits your workflow — for example:

* 🌐 **HTML** — for embedding live reports on web pages, Notion, or Confluence.
* 📊 **CSV** — for use in Google Sheets, Excel, or data import tools.
* 📄 **PDF** — for sending snapshots in emails or presentations.


## How it works

Whenever someone opens the shared link, **Mipler automatically generates the report on demand** — using the most up-to-date data from your connected sources. You’ll never have to worry about outdated numbers or cached results.

**Example:**

```
https://app.mipler.com/view/{SECRET_KEY}.csv ## .html, .xlsx, .json, .pdf
```

You can paste this link directly into Google Sheets using `IMPORTDATA`, or open it in a browser to download the CSV file, or use with n8n automation.

---

## Benefits

* 🔄 **Always fresh** — the report is built in real time every time it’s accessed.
* 🔗 **Flexible** — choose the format that fits your tool or workflow.
* 🤝 **Shareable** — collaborate easily with teammates, clients, or external partners.

Mipler makes sharing data effortless — you get **live, accurate insights** anywhere, without manual exports or version chaos.

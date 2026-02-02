---
title: Setup & Configuration
sidebar_position: 2
---

# MCP Setup & Configuration

This guide explains how to connect Mipler MCP Server to Claude Desktop, Claude Web, and Claude Code.

## Get Your MCP Connection URL {#get-mcp-url}

First, get your unique MCP Connection URL from Mipler:

1. Log in to your Mipler account at [app.mipler.com](https://app.mipler.com)
2. Go to **Settings** in the left sidebar
3. Find the **MCP Connection** section
4. Copy the URL (format: `https://app.mipler.com/mcp/your-key...`)

:::warning Keep Your URL Private
Your MCP Connection URL contains your unique access key that grants access to your Shopify data. Never share it publicly.
:::

## Configuration {#configuration}

:::info Claude Web Max Plan Required
Native MCP integration (adding connectors directly) is only available in **Claude Web Max plan**. For Claude Desktop and Claude Code, use the `mcp-remote` method described below.
:::

### Claude Desktop

1. **Open Claude Desktop** on your computer

2. **Go to Settings**
   - Click **Claude** in the menu bar (top of screen)
   - Select **Settings**
   - Click **Developer** tab

3. **Edit Config File**
   - Click **Edit Config** button
   - This opens `claude_desktop_config.json`

4. **Add This Code**
   ```json
   {
     "mcpServers": {
       "Mipler": {
         "command": "npx",
         "args": [
           "mcp-remote@latest",
           "https://app.mipler.com/mcp/YOUR-MCP-URL-HERE"
         ]
       }
     }
   }
   ```

5. **Save & Restart**
   - Save the file
   - Quit Claude Desktop completely
   - Reopen Claude Desktop

6. **Verify**
   - Look for MCP icon (🔨) in chat input box
   - Check Settings → Developer to see server status

### Claude Web (claude.ai) — Max Plan Only

Native MCP integration is available only for **Max plan** subscribers.

1. Go to [claude.ai](https://claude.ai) and log in
2. Click on your profile icon in the bottom left corner
3. Select **Settings**
4. Go to the **Integrations** tab
5. Click **Add Integration**
6. Paste your MCP Connection URL
7. Click **Connect**

Once connected, you can configure permissions for each tool:

| Permission | Description |
|------------|-------------|
| **Auto-approve** | Claude can use the tool without asking |
| **Needs approval** | Claude will ask before using the tool |
| **Disabled** | Claude cannot use this tool |

:::tip Recommended Permissions
Set read-only tools (`report_list`, `dashboard_list`, `datamodel_summary`) to **Auto-approve** and write operations (`report_create`, `dashboard_delete`) to **Needs approval** for safety.
:::

### Claude Code (CLI)

Add the MCP server using the command line:

```bash
claude mcp add Mipler -- npx mcp-remote@latest https://app.mipler.com/mcp/YOUR-MCP-URL-HERE
```

Or manually edit `~/.claude/settings.json`:

```json
{
  "mcpServers": {
    "Mipler": {
      "command": "npx",
      "args": [
        "mcp-remote@latest",
        "https://app.mipler.com/mcp/YOUR-MCP-URL-HERE"
      ]
    }
  }
}
```

Then restart Claude Code.

## Verify Connection

After configuration, verify the connection by asking Claude:

> "List my Mipler reports"

or

> "Show me available dashboards"

If configured correctly, Claude will use the MCP tools to fetch and display your data.

## Troubleshooting

### Connection Issues

- Verify your MCP URL is correct and complete
- Make sure you have an active Mipler subscription
- Check that your Shopify store is properly connected to Mipler
- Restart Claude Desktop/Code after changing configuration

### Tools Not Appearing

- Refresh the integration in Claude Web settings
- Verify the configuration JSON syntax is correct
- Check for any error messages in Claude Desktop console

### Permission Errors

- Ensure your Mipler account has the necessary permissions
- Check that the tool isn't disabled in Claude Web settings
- Try regenerating your MCP URL in Mipler Settings

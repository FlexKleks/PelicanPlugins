# PasteFox Share (by FlexKleks)

Share console logs and files via [pastefox.com](https://pastefox.com) with one click.

## Features

- One-click log sharing from server console
- Share text-based files directly from the file editor
- Optional API key for extended features (without API key, pastes expire after 7 days)
- Configurable visibility (PUBLIC/PRIVATE - requires API key)
- Visual effects (Matrix, Confetti, Glitch, etc.)
- Password protection support
- Custom domain support
- Fetches up to 5000 log lines
- Debug logging toggle for troubleshooting
- File sharing can be enabled/disabled via settings

## Configuration

1. Go to **Admin → Plugins**
2. Find **PasteFox Share** and click the **Settings** (gear icon) button
3. Configure the following settings:

| Setting        | Description                                        |
|----------------|----------------------------------------------------|
| API Key        | Optional - Get from https://pastefox.com/dashboard |
| Visibility     | PUBLIC or PRIVATE (requires API key)               |
| Effect         | Visual effect for the paste                        |
| Password       | Optional password protection                       |
| Custom Domain  | Use your own domain for paste URLs                 |
| File Sharing   | Enable/disable file sharing from the file editor   |
| Debug Logging  | Log all actions to Laravel log for troubleshooting |

### Without API Key
- Pastes expire after 7 days
- Always public visibility

### With API Key
- No expiration limit
- Private pastes available
- Effects
- Password protection
- Custom domain support

## File Sharing

When enabled, a **"Share"** button appears in the file editor header for text-based files.

Supported file types: `log`, `txt`, `cfg`, `conf`, `ini`, `json`, `xml`, `yaml`, `yml`, `properties`, `toml`, `env`, `csv`, `md`, `html`, `css`, `js`, `ts`, `php`, `py`, `java`, `lua`, `sh`, `sql`, and more.

Binary files (jar, zip, png, etc.) are not supported and the button will be hidden.

## Custom Domains

Use your own domain (e.g., `logs.yourdomain.com`) for sharing pastes.

1. Add and verify your domain at [PasteFox Dashboard → Custom Domains](https://pastefox.com/dashboard/domains)
2. Verify & Activate the domain in the PasteFox dashboard
3. Select the domain in the plugin settings

The plugin automatically falls back to `pastefox.com` if the configured domain becomes unavailable or inactive.

## Debug Logging

Enable **Debug Logging** in the plugin settings to log all PasteFox Share actions. Logs are written to the Laravel log file:

```bash
grep "PasteFox Share" storage/logs/laravel-$(date +%Y-%m-%d).log
```

Errors are always logged regardless of the debug setting.

## Usage

### Console Logs
1. Open a server console
2. Click the **"Share Logs"** button in the header
3. Copy the generated link from the notification

### File Sharing
1. Open a text-based file in the file editor
2. Click the **"Share"** button in the header
3. Copy the generated link from the notification

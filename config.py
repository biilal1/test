from telethon.sync import TelegramClient
from telethon.sessions import StringSession
import os
APP_ID = os.environ.get("APP_ID", "15179868")
APP_HASH = os.environ.get("APP_HASH", "5eed1d89e639551bd74d736037ebd4f9")
SESSION = os.environ.get("SESSION","1ApWapzMBu6mXzO5Fyjm_zFHq--ZRG7VOSc_2ywrBOF_Viu-3ROAmolYVAch0AnVnfS73HUcMGViXptUYUvspLUmHn6D3MzSIMId_-i4NZbADQUIjAOqpWWmoIPB6PaZO4EIFE2ZIbjKKsZ-awjQTSY9GULisEwrqgp5mbzgRe-d_7-IoWdDpjBYHUwgwUa9PlHY-g_Io7v8TBu6FXTrr5ijUWVurNSJx_a5tAaBQLfv2TaI7f1dPlLMLhhwZiduFYaGNqz398Bowc_ptxT05S9hLwaym2ZaF_zh6ac6e3-5ytRSfcPYfMVj6zHPmdNxNo9W0JIghd-rtiJXsmc1dy4X10FxH1JA=")
ha313so = TelegramClient(StringSession(SESSION), APP_ID, APP_HASH)
ha313so.start()

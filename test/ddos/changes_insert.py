
# python3 -m pip install --upgrade setuptools
# python3 -m pip install aiohttp

import asyncio
import aiohttp
import time

websites = """http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore/manage/cron/00000000000000000000000000000000000000
http://effcore"""


async def get(url, session):
  try:
    async with session.get(url=url) as response:
      resp = await response.read()
      print("Make request on: {}. Response length: {}.".format(url, len(resp)))
  except Exception as e:
    print("Unable to make request on: {}. Class: {}.".format(url, e.__class__))


async def main(urls):
  async with aiohttp.ClientSession() as session:
    ret = await asyncio.gather(*[get(url, session) for url in urls])
  print("{} requests were completed.".format(len(ret)))


urls = websites.split("\n")
time_0 = time.time()
asyncio.run(main(urls))
time_1 = time.time()

print("Total execution time: {}. {} URLs were processed".format(time_1 - time_0, len(urls)))
from selenium.webdriver.chrome.service import Service
from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.common.by import By
import time
from selenium.webdriver.common.keys import Keys

def get_driver_options():
    options = Options()
    options.add_argument("--no-sandbox")
    options.add_argument("--disable-extensions")
    options.add_argument("--disable-notifications")
    options.add_argument("--disable-sandbox")
    options.add_argument("--disable-dev-shm-usage")
    options.add_argument("--disable-application-cache")
    options.add_argument("--disable-infobars")
    options.add_argument("--disable-gpu")
    options.add_argument("--disable-bookmarks")
    options.add_argument("--incognito")
    # options.add_argument("--start-fullscreen")
    options.add_argument("--disable-popup-blocking")
    options.add_argument("--disk-cache-size=0")
    options.add_argument("--disk-cache-dir=/dev/null")
    options.add_argument("--hide-scrollbars")
    # options.add_argument("--window-size=1920,1080")
    # options.add_argument("headless")
    options.add_argument("mute-audio")
    options.add_experimental_option("excludeSwitches", ['enable-automation'])

    return options

class Solve:
    service = Service(ChromeDriverManager().install())
    DRIVER_OPTIONS = get_driver_options()
    LOGIN_URL: str = 'https://discord.com/login'

    def __init__(self) -> None:
        try:
            driver = webdriver.Chrome(executable_path='/usr/bin/chromium',
                service=self.service, options=self.DRIVER_OPTIONS)

            driver.get(self.LOGIN_URL)
            print('[*] Waiting to login and redirect chat')
            input()
            self.solve(driver)

            driver.stop_client()
            driver.close()
            driver.quit()
            self.service.stop()

        except Exception as e:
            print(f'[-] Error@solve: {e}')

    def solve(self, driver) -> None:

        driver.find_element(By.XPATH, "//div[@role='textbox']").send_keys("!flag")
        time.sleep(0.5)
        driver.find_element(By.XPATH, "//div[@role='textbox']").send_keys(Keys.RETURN)
        # waiting
        time.sleep(15)
        nums = []
        for _ in driver.find_elements(By.XPATH, "//ol//li")[::-1][:20]:
            if len(_.text) == 5:
                nums.append(int(_.text))
            if len(nums) == 10:
                break
        nums = sorted(nums)
        print(f'[*] Nums: {nums}')
        nums = list(map(str, sorted(nums)))
        driver.find_element(By.XPATH, "//div[@role='textbox']").send_keys(f"!answer=[{', '.join(nums)}]")
        time.sleep(0.5)
        driver.find_element(By.XPATH, "//div[@role='textbox']").send_keys(Keys.RETURN)
        input()

Solve()
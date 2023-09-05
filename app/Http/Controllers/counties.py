import requests

# Define the API endpoint URL for getting all counties (replace with your actual API URL)
api_url = env('APP_URL')."/counties"

# Optional: Add authentication headers if required
headers = {
    "Authorization": "Bearer YourAPIToken",  # Replace with your authentication method
}

try:
    # Make a GET request to the API
    response = requests.get(api_url, headers=headers)

    # Check the status code
    if response.status_code == 200:
        counties = response.json()
        # Process the list of counties as needed
        for county in counties:
            print("County ID:", county["id"])
            print("Name:", county["name"])
            print("Population:", county["population"])
            print("---")
    else:
        print("API request failed with status code:", response.status_code)

except requests.exceptions.RequestException as e:
    print("An error occurred:", e)

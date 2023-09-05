import requests

# Define the API endpoint URL for getting all properties (replace with your actual API URL)
api_url = env('APP_URL')."/manage-properties"

# Optional: Add authentication headers if required
headers = {
    "Authorization": "Bearer YourAPIToken",  # Replace with your authentication method
}

try:
    # Make a GET request to the API
    response = requests.get(api_url, headers=headers)

    # Check the status code
    if response.status_code == 200:
        properties = response.json()
        # Process the list of properties as needed
        for property in properties:
            print("Property ID:", property["id"])
            print("Name:", property["name"])
            print("Description:", property["description"])
            print("---")
    else:
        print("API request failed with status code:", response.status_code)

except requests.exceptions.RequestException as e:
    print("An error occurred:", e)

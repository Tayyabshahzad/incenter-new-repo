import requests

# Define the API endpoint URL (replace with your actual API URL)
api_url = "https://staging-api.propmix.io/pubrec/assessor/v1/GetPropertyDetails?streetaddress"



try:
    # Make a GET request to the API
    response = requests.get(api_url, headers=headers)

    # Check the status code
    if response.status_code == 200:
        data = response.json()
        # Process the API response data as needed
        print("API response:", data)
    else:
        print("API request failed with status code:", response.status_code)

except requests.exceptions.RequestException as e:
    print("An error occurred:", e)

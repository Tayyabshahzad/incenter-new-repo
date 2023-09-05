import requests

# Define the API endpoint URL for getting all users (replace with your actual API URL)
api_url = env('APP_URL')."/manage-users"

try:
    # Make a GET request to the API
    response = requests.get(api_url, headers=headers)

    # Check the status code
    if response.status_code == 200:
        users = response.json()
        # Process the list of users as needed
        for user in users:
            print("User ID:", user["id"])
            print("Username:", user["username"])
            print("Email:", user["email"])
            print("---")
    else:
        print("API request failed with status code:", response.status_code)

except requests.exceptions.RequestException as e:
    print("An error occurred:", e)

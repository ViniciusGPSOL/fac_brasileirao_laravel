# Frontend/Dockerfile
FROM python:3.11-slim

WORKDIR /app

# Copy requirements first to leverage Docker cache
COPY requirements.txt .

# Install dependencies
RUN pip install --no-cache-dir -r requirements.txt

# Copy the rest of the application
COPY . .

# Expose the port Rio runs on
EXPOSE 8000

# Command to run the application
CMD ["rio", "run", "--port", "8000", "--public"]

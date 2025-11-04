<?php
// Weather Widget Component for Kota Marudu, Sabah
// Get language from translations if available
if (!isset($lang)) {
    include_once 'translations.php';
}
$currentLang = isset($lang) ? $lang : 'ms';
?>
<div class="weather-widget">
    <style>
        .weather-widget {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 15px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            max-width: 300px;
            margin: 20px auto;
        }

        .weather-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .weather-title {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        .weather-location {
            font-size: 1rem;
            font-weight: 600;
        }

        .weather-main {
            display: flex;
            align-items: center;
            gap: 15px;
            margin: 15px 0;
        }

        .weather-icon {
            font-size: 3rem;
        }

        .weather-temp {
            font-size: 2.5rem;
            font-weight: bold;
        }

        .weather-desc {
            font-size: 1rem;
            text-transform: capitalize;
        }

        .weather-details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid rgba(255,255,255,0.2);
        }

        .weather-detail {
            font-size: 0.85rem;
        }

        .weather-detail-label {
            opacity: 0.8;
            margin-bottom: 3px;
        }

        .weather-detail-value {
            font-weight: 600;
        }

        .weather-loading {
            text-align: center;
            padding: 20px;
        }

        .weather-error {
            text-align: center;
            padding: 20px;
            color: #ffebee;
        }
    </style>
    <div id="weatherContent">
        <div class="weather-loading"><?php echo t('memuatkan_cuaca', 'Memuatkan cuaca...'); ?></div>
    </div>
    <script>
        (function() {
            // Get language from PHP
            const currentLang = '<?php echo $currentLang; ?>';
            
            // Translations object
            const translations = {
                ms: {
                    title: 'Cuaca Semasa',
                    loading: 'Memuatkan cuaca...',
                    loadingText: 'Memuatkan...',
                    humidity: 'Kelembapan',
                    wind: 'Angin',
                    windUnit: 'km/j',
                    error: 'Tidak dapat memuatkan data cuaca.',
                    errorDetail: 'Sila cuba lagi kemudian atau periksa sambungan internet anda.',
                    weather: {
                        0: 'Cerah',
                        1: 'Kebanyakannya cerah',
                        2: 'Sebahagian mendung',
                        3: 'Mendung',
                        45: 'Kabut',
                        48: 'Kabut beku',
                        51: 'Hujan renyai ringan',
                        53: 'Hujan renyai sederhana',
                        55: 'Hujan renyai lebat',
                        56: 'Hujan renyai beku ringan',
                        57: 'Hujan renyai beku lebat',
                        61: 'Hujan ringan',
                        63: 'Hujan sederhana',
                        65: 'Hujan lebat',
                        66: 'Hujan beku ringan',
                        67: 'Hujan beku lebat',
                        71: 'Salji ringan',
                        73: 'Salji sederhana',
                        75: 'Salji lebat',
                        77: 'Butiran salji',
                        80: 'Hujan ringan',
                        81: 'Hujan sederhana',
                        82: 'Hujan lebat',
                        85: 'Hujan salji ringan',
                        86: 'Hujan salji lebat',
                        95: 'Ribut petir',
                        96: 'Ribut petir dengan hujan batu',
                        99: 'Ribut petir dengan hujan batu lebat'
                    }
                },
                en: {
                    title: 'Current Weather',
                    loading: 'Loading weather...',
                    loadingText: 'Loading...',
                    humidity: 'Humidity',
                    wind: 'Wind',
                    windUnit: 'km/h',
                    error: 'Unable to load weather data.',
                    errorDetail: 'Please try again later or check your internet connection.',
                    weather: {
                        0: 'Clear',
                        1: 'Mainly Clear',
                        2: 'Partly Cloudy',
                        3: 'Overcast',
                        45: 'Foggy',
                        48: 'Depositing Rime Fog',
                        51: 'Light Drizzle',
                        53: 'Moderate Drizzle',
                        55: 'Dense Drizzle',
                        56: 'Light Freezing Drizzle',
                        57: 'Dense Freezing Drizzle',
                        61: 'Slight Rain',
                        63: 'Moderate Rain',
                        65: 'Heavy Rain',
                        66: 'Light Freezing Rain',
                        67: 'Heavy Freezing Rain',
                        71: 'Slight Snow',
                        73: 'Moderate Snow',
                        75: 'Heavy Snow',
                        77: 'Snow Grains',
                        80: 'Slight Rain Showers',
                        81: 'Moderate Rain Showers',
                        82: 'Violent Rain Showers',
                        85: 'Slight Snow Showers',
                        86: 'Heavy Snow Showers',
                        95: 'Thunderstorm',
                        96: 'Thunderstorm with Hail',
                        99: 'Thunderstorm with Heavy Hail'
                    }
                }
            };
            
            const t = translations[currentLang] || translations.ms;
            
            // Kota Marudu coordinates: 6.5°N, 116.8°E
            const lat = 6.5;
            const lon = 116.8;
            
            // Using Open-Meteo API (free, no API key required)
            const apiUrl = `https://api.open-meteo.com/v1/forecast?latitude=${lat}&longitude=${lon}&current=temperature_2m,relative_humidity_2m,weather_code,wind_speed_10m&timezone=Asia%2FKuala_Lumpur&forecast_days=1`;
            
            const weatherContent = document.getElementById('weatherContent');

            function updateWeather(data) {
                if (!data || !data.current) {
                    // Fallback display if API fails
                    weatherContent.innerHTML = `
                        <div class="weather-header">
                            <div>
                                <div class="weather-title">${t.title}</div>
                                <div class="weather-location">Kota Marudu, Sabah</div>
                            </div>
                        </div>
                        <div class="weather-main">
                            <div class="weather-icon">☀️</div>
                            <div>
                                <div class="weather-temp">--°C</div>
                                <div class="weather-desc">${t.loadingText}</div>
                            </div>
                        </div>
                        <div class="weather-details">
                            <div class="weather-detail">
                                <div class="weather-detail-label">${t.humidity}</div>
                                <div class="weather-detail-value">--%</div>
                            </div>
                            <div class="weather-detail">
                                <div class="weather-detail-label">${t.wind}</div>
                                <div class="weather-detail-value">-- ${t.windUnit}</div>
                            </div>
                        </div>
                    `;
                    return;
                }

                // Open-Meteo API returns current weather data
                const current = data.current;
                // Handle both array and direct value formats
                const getValue = (val) => Array.isArray(val) ? val[0] : val;
                
                const temp = Math.round(getValue(current.temperature_2m) || 28);
                const humidity = Math.round(getValue(current.relative_humidity_2m) || 75);
                const windSpeed = Math.round(getValue(current.wind_speed_10m) || 5);
                const weatherCode = getValue(current.weather_code) || 0;
                
                const { icon, desc } = getWeatherIcon(weatherCode);

                weatherContent.innerHTML = `
                    <div class="weather-header">
                        <div>
                            <div class="weather-title">${t.title}</div>
                            <div class="weather-location">Kota Marudu, Sabah</div>
                        </div>
                    </div>
                    <div class="weather-main">
                        <div class="weather-icon">${icon}</div>
                        <div>
                            <div class="weather-temp">${temp}°C</div>
                            <div class="weather-desc">${desc}</div>
                        </div>
                    </div>
                    <div class="weather-details">
                        <div class="weather-detail">
                            <div class="weather-detail-label">${t.humidity}</div>
                            <div class="weather-detail-value">${humidity}%</div>
                        </div>
                        <div class="weather-detail">
                            <div class="weather-detail-label">${t.wind}</div>
                            <div class="weather-detail-value">${windSpeed} ${t.windUnit}</div>
                        </div>
                    </div>
                `;
            }

            function getWeatherIcon(code) {
                // Weather icons (same for both languages)
                const icons = {
                    0: '☀️', 1: '🌤️', 2: '⛅', 3: '☁️',
                    45: '🌫️', 48: '🌫️',
                    51: '🌦️', 53: '🌦️', 55: '🌦️',
                    56: '🌨️', 57: '🌨️',
                    61: '🌧️', 63: '🌧️', 65: '🌧️',
                    66: '🌨️', 67: '🌨️',
                    71: '❄️', 73: '❄️', 75: '❄️', 77: '❄️',
                    80: '🌦️', 81: '🌦️', 82: '🌦️',
                    85: '🌨️', 86: '🌨️',
                    95: '⛈️', 96: '⛈️', 99: '⛈️'
                };
                
                const icon = icons[code] || '☀️';
                const desc = t.weather[code] || t.weather[0];
                
                return { icon, desc };
            }

            // Fetch weather data
            fetch(apiUrl)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    // Open-Meteo returns data in a specific format
                    if (data.current) {
                        updateWeather(data);
                    } else {
                        throw new Error('Invalid API response');
                    }
                })
                .catch(error => {
                    console.error('Weather API Error:', error);
                    // Show loading state instead of error for better UX
                    updateWeather(null);
                    
                    // Retry after 3 seconds
                    setTimeout(() => {
                        fetch(apiUrl)
                            .then(response => response.json())
                            .then(data => {
                                if (data.current) {
                                    updateWeather(data);
                                }
                            })
                            .catch(() => {
                                weatherContent.innerHTML = `
                                    <div class="weather-error">
                                        ${t.error}<br>
                                        <small>${t.errorDetail}</small>
                                    </div>
                                `;
                            });
                    }, 3000);
                });
        })();
    </script>
</div>

